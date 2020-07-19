<?php

require __DIR__.'/vendor/autoload.php';

use Doctum\Doctum;
use Symfony\Component\Finder\Finder;
use Doctum\Version\GitVersionCollection;
use Doctum\RemoteRepository\GitHubRemoteRepository;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('stubs')
	->in($dir = __DIR__.'/laravel/src');

$versions = GitVersionCollection::create($dir)
	->add('5.5', 'Laravel 5.5')
	->add('5.8', 'Laravel 5.8')
	->add('6.x', 'Laravel 6.x')
	->add('7.x', 'Laravel 7.x')
	->add('master', 'Laravel Dev');

return new Doctum($iterator, array(
	'title' => 'Laravel API',
	'versions' => $versions,
	'build_dir' => __DIR__.'/build/%version%',
	'cache_dir' => __DIR__.'/cache/%version%',
	'default_opened_level' => 2,
	'remote_repository' => new GitHubRemoteRepository('laravel/framework', dirname($dir)),
));
