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
        return $this->cache->remember('docs.'.$version.'.index', 5, function () use ($version) {
            $path = base_path('resources/docs/'.$version.'/documentation.md');

            if ($this->files->exists($path)) {
                return $this->replaceLinks($version, (new GithubFlavoredMarkdownConverter())->convert($this->files->get($path)));
            }

            return null;
        });
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
                $content = $this->files->get($path);

                $content = (new GithubFlavoredMarkdownConverter())->convert($content);

                return $this->replaceLinks($version, $content);
            }

            return null;
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
        return str_replace('%7B%7Bversion%7D%7D', $version, $content);
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
            '9.x' => '9.x',
            '8.x' => '8.x',
            '7.x' => '7.x',
            '6.x' => '6.x',
            // '6.0' => '6.0',
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
}
