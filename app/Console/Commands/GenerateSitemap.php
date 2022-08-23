<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Psr\Http\Message\UriInterface;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->shouldCrawl(function (UriInterface $url) {
                // Crawl everything without "docs" in the path, as we'll crawl the docs separately...
                return ! Str::contains($url->getPath(), 'docs');
            })
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === 'team') {
                    $url->setPriority(0.5);
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap_pages.xml'));

        SitemapGenerator::create(config('app.url').'/docs/'.DEFAULT_VERSION)
            ->shouldCrawl(function (UriInterface $url) {
                return Str::contains($url->getPath(), 'docs');
            })
            ->writeToFile(public_path('sitemap_docs.xml'));

        SitemapIndex::create()
            ->add('sitemap_pages.xml')
            ->add('sitemap_docs.xml')
            ->writeToFile(public_path('sitemap.xml'));

        return 0;
    }
}
