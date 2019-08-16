<?php

require __DIR__.'/vendor/autoload.php';

use Sami\Sami;
use Symfony\Component\Finder\Finder;
use Sami\Version\GitVersionCollection;
use Sami\RemoteRepository\GitHubRemoteRepository;

$iterator = Finder::create()
	->files()
	->name('*.php')
	->exclude('stubs')
	->in($dir = __DIR__.'/laravel/src');

$versions = GitVersionCollection::create($dir)
	->add('4.2', 'Laravel 4.2')
	->add('5.0', 'Laravel 5.0')
	->add('5.1', 'Laravel 5.1')
	->add('5.2', 'Laravel 5.2')
	->add('5.3', 'Laravel 5.3')
	->add('5.4', 'Laravel 5.4')
	->add('5.5', 'Laravel 5.5')
	->add('5.6', 'Laravel 5.6')
    ->add('5.7', 'Laravel 5.7')
	->add('5.8', 'Laravel 5.8')
	->add('master', 'Laravel Dev');

return new Sami($iterator, array(
	'title' => 'Laravel API',
	'versions' => $versions,
	'build_dir' => __DIR__.'/build/%version%',
	'cache_dir' => __DIR__.'/cache/%version%',
	'default_opened_level' => 2,
	'remote_repository' => new GitHubRemoteRepository('laravel/framework', dirname($dir)),
));
