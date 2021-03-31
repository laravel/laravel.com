<?php

namespace App;

use Illuminate\Filesystem\Filesystem;
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
            $path = $this->markdownPath($version, 'documentation');

            if ($this->files->exists($path)) {
                return $this->replaceLinks($version, (new Parsedown())->text($this->files->get($path)));
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
            $path = $this->markdownPath($version, $page);

            if ($this->files->exists($path)) {
                return $this->replaceLinks($version, (new Parsedown)->text($this->files->get($path)));
            }

            return null;
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
     * Return markdown path
     *
     * @param  string  $version
     * @param  string  $page
     * @return string
     */
    public static function markdownPath($version, $page)
    {
        return resource_path('docs/'.$version.'/'.$page.'.md');
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
        return $this->files->exists($this->markdownPath($version, $page));
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
