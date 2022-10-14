<?php

namespace App\Documentation;

use App\Documentation;
use App\Markdown\GithubFlavoredMarkdownConverter;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Arr;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use Symfony\Component\DomCrawler\Crawler;

class Page implements Htmlable
{
	/**
	 * The docs version number for this page.
	 * 
	 * @var string|int
	 */
	protected $version;
	
	/**
	 * The rendered markdown content.
	 * 
	 * @var string|RenderedContentWithFrontMatter
	 */
	protected $content;
	
	/**
	 * Any front matter/metadata associated with the page.
	 * 
	 * @var array
	 */
	protected $metadata = [];
	
	/**
	 * Constructor.
	 * 
	 * @param  string  $markdown
	 * @param  string|int  $version
	 * @return void
	 */
	public function __construct($markdown, $version)
	{
		$this->content = (new GithubFlavoredMarkdownConverter())->convert($markdown);
		$this->version = $version;
		
		if ($this->content instanceof RenderedContentWithFrontMatter) {
			$this->metadata = $this->content->getFrontMatter();
		}
	}
	
	/**
	 * Get the page title.
	 * 
	 * @param  string|null  $default
	 * @return string|null
	 */
	public function title($default = null)
	{
		return $this->metadata('title', function() use ($default) {
			$title = (new Crawler((string) $this->content))->filterXPath('//h1');
			return count($title) ? $title->text() : $default;
		});
	}
	
	/**
	 * Get page metadata.
	 * 
	 * @param  string  $key
	 * @param  string  $default
	 * @return string
	 */
	public function metadata($key, $default = null)
	{
		return Arr::get($this->metadata, $key, $default);
	}
	
	/**
	 * Get open graph metadata.
	 *
	 * @param string $key
	 * @param string $default
	 * @return string
	 */
	public function openGraph($key, $default = null)
	{
		return Arr::get($this->metadata, "og.$key") 
			?? $this->metadata($key, $default);
	}
	
	/**
	 * Get twitter metadata.
	 *
	 * @param string $key
	 * @param string $default
	 * @return string
	 */
	public function twitter($key, $default = null)
	{
		return Arr::get($this->metadata, "twitter.$key")
			?? $this->openGraph($key, $default);
	}
	
	/**
	 * Convert markdown to HTML.
	 * 
	 * @return string
	 */
	public function toHtml()
	{
		return $this->__toString();
	}
	
	/**
	 * Convert markdown to string.
	 * 
	 * @return string
	 */
	public function __toString()
	{
		return Documentation::replaceLinks($this->version, (string) $this->content);
	}
}
