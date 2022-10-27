<?php

namespace App\Documentation;

use App\Documentation;
use App\Markdown\GithubFlavoredMarkdownConverter;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Arr;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;
use League\CommonMark\Extension\FrontMatter\Output\RenderedContentWithFrontMatter;
use Symfony\Component\DomCrawler\Crawler;

class Page implements Htmlable
{
	/**
	 * The name of this page.
	 *
	 * @var string
	 */
	protected $name;
	
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
	 * @param  string  $name
	 * @param  string  $markdown
	 * @param  string|int  $version
	 * @return void
	 */
	public function __construct($name, $markdown, $version)
	{
		$this->name = $name;
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
	 * Get the first code block on the page.
	 *
	 * @return string|null
	 */
	public function representativeCodeBlock()
	{
		for ($size = 16; $size > 0; $size = $size - 4) {
			if ($match = $this->firstCodeBlockOfSize($size)) {
				return $match;
			}
		}
		
		return null;
	}
	
	protected function firstCodeBlockOfSize($size = 16)
	{
		$blocks = (new Crawler((string) $this->content))->filterXPath('//pre[code]');
		
		return collect($blocks)
			->map(function($block) {
				return new HtmlString((new Crawler($block))->html());
			})
			->first(function($html) use ($size) {
				return Str::substrCount((string) $html, '<div') >= $size;
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
	 * Get the path to the page's open graph image.
	 *
	 * @return string
	 */
	public function openGraphImage()
	{
		return $this->openGraph('image', function() {
			$default = "img/og/{$this->name}.png";
			
			return file_exists(public_path($default))
				? $default
				: 'img/og-image.png';
		});
	}
	
	/**
	 * Get a hash of this page's content.
	 * 
	 * @return string
	 */
	public function hash()
	{
		return md5((string) $this->content);
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
