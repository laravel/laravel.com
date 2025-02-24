<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use App\Markdown\GithubFlavoredMarkdownConverter;
use Carbon\CarbonInterval;
use Illuminate\Contracts\Cache\Repository as Cache;

class Documentation
{
    /**
     * The filesystem implementation.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The cache implementation.
     *
     * @var \Illuminate\Contracts\Cache\Repository
     */
    protected $cache;

    /**
     * Create a new documentation instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @param  \Illuminate\Contracts\Cache\Repository  $cache
     * @return void
     */
    public function __construct(Filesystem $files, Cache $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * Get the documentation index page.
     *
     * @param  string  $version
     * @return string|null
     */
    public function getIndex($version)
    {
        $index = $this->cache->remember('docs.'.$version.'.index', 5, function () use ($version) {
            $path = base_path('resources/docs/'.$version.'/documentation.md');

            if ($this->files->exists($path)) {
                $content = $this->replaceLinks($version, $this->files->get($path));

                return (new GithubFlavoredMarkdownConverter())->convert($content);
            }

            return null;
        });

        $currentPath = '/'.request()->path();

        $currentPath = $currentPath == '/docs/11.x' ? '/docs/11.x/installation' : $currentPath;

        $index = str_replace(
            "<li>\n<a href=\"$currentPath\">",
            $activeElement = "<li class=\"active\">\n<a href=\"$currentPath\">",
            $index
        );

        $parentH2Text = str($index)
            ->before($activeElement)
            ->afterLast('<h2>')
            ->before('</h2>')
            ->toString();

        return str_replace(
            "<li>\n<h2>$parentH2Text</h2>",
            "<li class=\"sub--on\">\n<h2>$parentH2Text</h2>",
            $index
        );
    }

    /**
     * Get the given documentation page.
     *
     * @param  string  $version
     * @param  string  $page
     * @return string|null
     */
    public function get($version, $page)
    {
        return $this->cache->remember('docs.'.$version.'.'.$page, 5, function () use ($version, $page) {
            $path = base_path('resources/docs/'.$version.'/'.$page.'.md');

            if ($this->files->exists($path)) {
                $content = $this->replaceLinks($version, $this->files->get($path));

                return (new GithubFlavoredMarkdownConverter())->convert($content);
            }

            return null;
        });
    }

    /**
     * Get Markdown of a specific documentation page.
     *
     * @param  string  $version
     * @param  string  $page
     * @return string|null
     */
    public function getMarkdown($version, $page)
    {
        return $this->cache->remember('docs.'.$version.'.'.$page.'.md', 60, function () use ($version, $page) {
            $path = base_path('resources/docs/'.$version.'/'.$page.'.md');

            if ($this->files->exists($path)) {
                $content = $this->files->get($path);
                $content = $this->removeNamedAnchors($content);
                $content = $this->removeTorchlightAnnotations($content);
                $content = $this->replaceMarkdownRelativeWithAbsoluteUrls($version, $content);

                if ($page !== 'documentation') {
                    $content = $this->removeTableOfContents($content);
                }

                return $content;
            }

            return null;
        });
    }

    /**
     * Ger Markdown of the index page.
     *
     * @param  string  $version
     * @return string|null
     */
    public function getIndexMarkdown($version)
    {
        return $this->getMarkdown($version, 'documentation');
    }

    /**
     * Get Markdown of all pages combined into one string.
     *
     * @param  string  $version
     * @return string
     */
    public function getAllMarkdown($version)
    {
        return $this->cache->remember('docs.'.$version.'.md', 60, function () use ($version) {
            $ignoredFiles = ['documentation.md', 'readme.md', 'license.md'];

            return collect($this->files->files(base_path('resources/docs/'.$version)))
                ->filter(fn($file) => ! in_array($file->getFilename(), $ignoredFiles, true))
                ->map(fn($file) => $this->getMarkdown($version, $file->getFilenameWithoutExtension()))
                ->join(PHP_EOL.PHP_EOL);
        });
    }

    /**
     * Get the array based index representation of the documentation.
     *
     * @param  string  $version
     * @return array
     */
    public function indexArray($version)
    {
        return $this->cache->remember('docs.{'.$version.'}.index', CarbonInterval::hour(1), function () use ($version) {
            $path = base_path('resources/docs/'.$version.'/documentation.md');

            if (! $this->files->exists($path)) {
                return [];
            }

            return [
                'pages' => collect(explode(PHP_EOL, $this->replaceLinks($version, $this->files->get($path))))
                    ->filter(fn ($line) => Str::contains($line, '/docs/{{version}}/'))
                    ->map(fn ($line) => resource_path(Str::of($line)->afterLast('(/')->before(')')->replace('{{version}}', $version)->append('.md')))
                    ->filter(fn ($path) => $this->files->exists($path))
                    ->mapWithKeys(function ($path) {
                        $contents = $this->files->get($path);

                        preg_match('/\# (?<title>[^\\n]+)/', $contents, $page);
                        preg_match_all('/<a name="(?<fragments>[^"]+)"><\\/a>\n#+ (?<titles>[^\\n]+)/', $contents, $section);

                        return [
                            (string) Str::of($path)->afterLast('/')->before('.md') => [
                                'title' => $page['title'],
                                'sections' => collect($section['fragments'])
                                    ->combine($section['titles'])
                                    ->map(fn ($title) => ['title' => $title])
                            ],
                        ];
                    }),
            ];
        });
    }

    /**
     * Replace the version place-holder in links.
     *
     * @param  string  $version
     * @param  string  $content
     * @return string
     */
    public static function replaceLinks($version, $content)
    {
        return str_replace('{{version}}', $version, $content);
    }

    /**
     * Check if the given section exists.
     *
     * @param  string  $version
     * @param  string  $page
     * @return boolean
     */
    public function sectionExists($version, $page)
    {
        return $this->files->exists(
            base_path('resources/docs/'.$version.'/'.$page.'.md')
        );
    }

    /**
     * Determine which versions a page exists in.
     *
     * @param  string  $page
     * @return \Illuminate\Support\Collection
     */
    public function versionsContainingPage($page)
    {
        return collect(static::getDocVersions())
            ->filter(function ($version) use ($page) {
                return $this->sectionExists($version, $page);
            });
    }

    /**
     * Get the publicly available versions of the documentation
     *
     * @return array
     */
    public static function getDocVersions()
    {
        return [
            'master' => 'Master',
            '12.x' => '12.x',
            '11.x' => '11.x',
            '10.x' => '10.x',
            '9.x' => '9.x',
            '8.x' => '8.x',
            '7.x' => '7.x',
            '6.x' => '6.x',
            '5.8' => '5.8',
            '5.7' => '5.7',
            '5.6' => '5.6',
            '5.5' => '5.5',
            '5.4' => '5.4',
            '5.3' => '5.3',
            '5.2' => '5.2',
            '5.1' => '5.1',
            '5.0' => '5.0',
            '4.2' => '4.2',
        ];
    }

    /**
     * Replace relative urls with absolute urls in Markdown, adding .md suffix
     *
     * @param  string  $version
     * @param  string  $content
     * @return string
     */
    private function replaceMarkdownRelativeWithAbsoluteUrls($version, $content)
    {
        $content = $this->replaceLinks($version, $content, true);
        $pattern = '/(!?\[([^\]]*)\]\(([^\)]+)\))/'; // markdown links [text](url)

        return preg_replace_callback($pattern, function ($matches) {
            $text = $matches[2];
            $url = url(str($matches[3])->startsWith('/docs') ? $matches[3].'.md' : $matches[3]);

            return "[$text]($url)";
        }, $content);
    }

    /**
     * Remove Table of Contents from Markdown
     *
     * @param  string  $content
     * @return string
     */
    private function removeTableOfContents($content)
    {
        $lines = explode(PHP_EOL, $content);

        if (count($lines) < 2) {
            return $content;
        }

        $header = $lines[0];
        $secondHeaderIndex = 1;

        foreach ($lines as $index => $line) {
            if (str_starts_with($line, '## ')) {
                $secondHeaderIndex = $index;
                break;
            }
        }

        $lines = array_slice($lines, $secondHeaderIndex);
        array_unshift($lines, $header, '');

        return implode(PHP_EOL, $lines);
    }

    /**
     * Remove named anchors such as <a name="introduction"></a>
     *
     * @param  string  $content
     * @return string
     */
    private function removeNamedAnchors($content) {
        return preg_replace('/<a name="[\w-]+"><\/a>/i', '', $content);
    }

    /**
     * Remove torchlight annotations comments
     *
     * @param  string  $content
     * @return string
     */
    private function removeTorchlightAnnotations($content)
    {
        $annotations = ['[tl! add]', '[tl! remove]', '[tl! add:start]', '[tl! add:end]'];

        foreach ($annotations as $annotation) {
            $content = preg_replace('/'.preg_quote('// '.$annotation, '/').'/', '', $content);
        }

        return $content;
    }
}
