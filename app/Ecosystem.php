<?php

namespace App;

final class Ecosystem
{
    public static function featured(): array
    {
        return [
            'forge' => [
                'name' => 'Forge',
                'image-alt' => 'Forge Logo',
                'description' => 'Server management doesn\'t have to be a nightmare. Provision and deploy unlimited PHP applications on DigitalOcean, Linode, Vultr, Amazon, Hetzner and more.',
                'href' => 'https://forge.laravel.com',
            ],
            'vapor' => [
                'name' => 'Vapor',
                'image-alt' => 'Vapor Logo',
                'description' => 'Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS. Launch your Laravel infrastructure on Vapor and fall in love with the scalable simplicity of serverless.',
                'href' => 'https://vapor.laravel.com',
            ],
        ];
    }

    public static function items(): array
    {
        return [
            'breeze' => [
                'name' => 'Breeze',
                'image-alt' => 'Laravel Breeze Logo Logo',
                'description' => 'Lightweight starter kit scaffolding for new applications with Blade or Inertia.',
                'href' => '/docs/' . DEFAULT_VERSION . '/starter-kits#laravel-breeze',
            ],
            'cashier' => [
                'name' => 'Cashier',
                'image-alt' => 'Laravel Cashier Logo',
                'description' => 'Take the pain out of managing subscriptions on Stripe or Paddle.',
                'href' => '/docs/' . DEFAULT_VERSION . '/billing',
            ],
            'dusk' => [
                'name' => 'Dusk',
                'image-alt' => 'Laravel Dusk Logo',
                'description' => 'Automated browser testing to ship your application with confidence.',
                'href' => '/docs/' . DEFAULT_VERSION . '/dusk',
            ],
            'echo' => [
                'name' => 'Echo',
                'image-alt' => 'Laravel Echo Logo',
                'description' => 'Listen for WebSocket events broadcast by your Laravel application.',
                'href' => '/docs/' . DEFAULT_VERSION . '/broadcasting',
            ],
            'envoyer' => [
                'name' => 'Envoyer',
                'image-alt' => 'Envoyer Logo',
                'description' => 'Deploy your Laravel applications to customers with zero downtime.',
                'href' => 'https://envoyer.io',
            ],
            'forge' => [
                'name' => 'Forge',
                'image-alt' => 'Forge Logo',
                'description' => 'Server management doesn\'t have to be a nightmare.',
                'href' => 'https://forge.laravel.com',
            ],
            'herd' => [
                'name' => 'Herd',
                'image-alt' => 'Herd Logo',
                'description' => 'The fastest Laravel local development experience - exclusively for macOS.',
                'href' => 'https://herd.laravel.com',
            ],
            'horizon' => [
                'name' => 'Horizon',
                'image-alt' => 'Laravel Horizon Logo',
                'description' => 'Beautiful UI for monitoring your Redis driven Laravel queues.',
                'href' => '/docs/' . DEFAULT_VERSION . '/horizon',
            ],
            'inertia' => [
                'name' => 'Inertia',
                'image-alt' => 'Inertia Logo',
                'description' => 'Create modern single-page React and Vue apps using classic server-side routing.',
                'href' => 'https://inertiajs.com',
            ],
            'jetstream' => [
                'name' => 'Jetstream',
                'image-alt' => 'Laravel Jetstream Logo',
                'description' => 'Robust starter kit including authentication and team management.',
                'href' => 'https://jetstream.laravel.com',
            ],
            'livewire' => [
                'name' => 'Livewire',
                'image-alt' => 'Laravel Livewire Logo',
                'description' => 'Build reactive, dynamic applications using Laravel and Blade.',
                'href' => 'https://livewire.laravel.com',
            ],
            'nova' => [
                'name' => 'Nova',
                'image-alt' => 'Laravel Nova Logo',
                'description' => 'Thoughtfully designed administration panel for your Laravel applications.',
                'href' => 'https://nova.laravel.com',
            ],
            'octane' => [
                'name' => 'Octane',
                'image-alt' => 'Laravel Octane Logo',
                'description' => 'Supercharge your application\'s performance by keeping it in memory.',
                'href' => '/docs/' . DEFAULT_VERSION . '/octane',
            ],
            'pennant' => [
                'name' => 'Pennant',
                'image-alt' => 'Laravel Pennant Logo',
                'description' => 'A simple, lightweight library for managing feature flags.',
                'href' => '/docs/' . DEFAULT_VERSION . '/pennant',
            ],
            'pint' => [
                'name' => 'Pint',
                'image-alt' => 'Laravel Pint Logo',
                'description' => 'Opinionated PHP code style fixer for minimalists.',
                'href' => '/docs/' . DEFAULT_VERSION . '/pint',
            ],
            'prompts' => [
                'name' => 'Prompts',
                'image-alt' => 'Laravel Prompts Logo',
                'description' => 'Beautiful and user-friendly forms for command-line applications.',
                'href' => '/docs/' . DEFAULT_VERSION . '/prompts',
            ],
            'sail' => [
                'name' => 'Sail',
                'image-alt' => 'Laravel Sail Logo',
                'description' => 'Hand-crafted Laravel local development experience using Docker.',
                'href' => '/docs/' . DEFAULT_VERSION . '/sail',
            ],
            'sanctum' => [
                'name' => 'Sanctum',
                'image-alt' => 'Laravel Sanctum Logo',
                'description' => 'API and mobile application authentication without wanting to pull your hair out.',
                'href' => '/docs/' . DEFAULT_VERSION . '/sanctum',
            ],
            'scout' => [
                'name' => 'Scout',
                'image-alt' => 'Laravel Scout Logo',
                'description' => 'Lightning fast full-text search for your application\'s Eloquent models.',
                'href' => '/docs/' . DEFAULT_VERSION . '/scout',
            ],
            'socialite' => [
                'name' => 'Socialite',
                'image-alt' => 'Laravel Socialite Logo',
                'description' => 'Social authentication via Facebook, Twitter, GitHub, LinkedIn, and more.',
                'href' => '/docs/' . DEFAULT_VERSION . '/socialite',
            ],
            'spark' => [
                'name' => 'Spark',
                'image-alt' => 'Laravel Spark Logo',
                'description' => 'Launch your next business with our fully-featured, drop-in billing portal.',
                'href' => 'https://spark.laravel.com',
            ],
            'telescope' => [
                'name' => 'Telescope',
                'image-alt' => 'Laravel Telescope Logo',
                'description' => 'Debug your application using our debugging and insight UI.',
                'href' => '/docs/' . DEFAULT_VERSION . '/telescope',
            ],
            'vapor' => [
                'name' => 'Vapor',
                'image-alt' => 'Laravel Vapor Logo',
                'description' => 'Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS.',
                'href' => 'https://vapor.laravel.com',
            ]
        ];
    }
}
