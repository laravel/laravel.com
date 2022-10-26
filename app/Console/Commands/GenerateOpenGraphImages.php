<?php

namespace App\Console\Commands;

use App\Documentation;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Illuminate\Console\Command;
use Illuminate\Support\LazyCollection;
use Symfony\Component\Console\Command\SignalableCommandInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Throwable;

class GenerateOpenGraphImages extends Command implements SignalableCommandInterface
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'og:generate-images {--page=}';
	
	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate open graph images for docs pages.';
	
	/**
	 * The Laravel documentation repository.
	 *
	 * @var \App\Documentation
	 */
	protected $docs;
	
	/**
	 * The web driver instance.
	 *
	 * @var \Facebook\WebDriver\Remote\RemoteWebDriver
	 */
	protected $driver;
	
	/**
	 * Execute the console command.
	 *
	 * @param \App\Documentation $docs
	 * @return int
	 */
	public function handle(Documentation $docs)
	{
		$this->docs = $docs;
		$this->driver = $this->driver();
		
		register_shutdown_function(function() {
			$this->quit();
		});
		
		try {
			$this->pages()->each(function($name) {
				$this->getOutput()->write(str_pad("{$name}:", 30));
				
				try {
					$page = $this->docs->get(DEFAULT_VERSION, $name);
					
					$this->screenShotOpenGraphImage(
						$name, $destination = public_path($page->openGraph('image', 'img/og/'.$name.'.png'))
					);
					
					$this->line("Wrote to <info>{$destination}</info>");
				} catch (Throwable $exception) {
					$this->error(class_basename($exception).': '.$exception->getMessage());
				}
			});
		} finally {
			$this->quit();
		}
		
		return 0;
	}
	
	/**
	 * Take a screenshot of the open graph image for a page. 
	 * 
	 * @param  string  $name
	 * @param  string  $path
	 * @return void
	 */
	protected function screenShotOpenGraphImage($name, $path)
	{
		$this->driver->navigate()->to(url('/og-image/'.$name));
		
		$this->driver->wait()->until(function(RemoteWebDriver $driver) {
			return $driver->executeScript('return `complete` === document.readyState');
		});
		
		$this->driver->findElement(WebDriverBy::id('og-image'))->takeElementScreenshot($path);
	}
	
	/**
	 * @inheritdoc
	 */
	public function getSubscribedSignals(): array
	{
		return [
			2, // SIGINT
			15, //SIGTERM
		];
	}
	
	/**
	 * @inheritdoc
	 */
	public function handleSignal(int $signal): void
	{
		$this->quit();
		exit(1);
	}
	
	/**
	 * Quit any running chrome driver instances.
	 *
	 * @return void
	 */
	protected function quit()
	{
		if ($this->driver) {
			$this->warn("\nQuitting chromedriver...");
			$this->driver->quit();
			$this->driver = null;
		}
	}
	
	/**
	 * Get a lazy collection of all the pages for the current default version.
	 *
	 * @return \Illuminate\Support\LazyCollection
	 */
	protected function pages()
	{
		if ($page = $this->option('page')) {
			return new LazyCollection([$page]);
		}
		
		$finder = Finder::create()
			->files()
			->in(base_path('resources/docs/'.DEFAULT_VERSION))
			->sortByModifiedTime()
			->name('*.md');
		
		return LazyCollection::make($finder->getIterator())
			->map(function(SplFileInfo $file) {
				return $file->getBasename('.md');
			});
	}
	
	/**
	 * Get the web driver instance for taking screenshots.
	 *
	 * @return \Facebook\WebDriver\Remote\RemoteWebDriver
	 */
	protected function driver()
	{
		$options = new ChromeOptions();
		$options->addArguments([
			'--window-size=1400,1000', // Larger than our og:image size
			'--force-device-scale-factor=2.0', // Higher DPI screenshot
		]);
		
		$capabilities = DesiredCapabilities::chrome();
		$capabilities->setCapability(ChromeOptions::CAPABILITY_W3C, $options);
		
		return RemoteWebDriver::create('http://localhost:4444', $capabilities);
	}
}
