<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '9.x');
}

if (! defined('SHOW_VAPOR')) {
    define('SHOW_VAPOR', random_int(1, 2) === 1);
}

if (! defined('SHOW_PROMO')) {
    $int = random_int(1, 3);

    if ($int === 1) {
        define('SHOW_PROMO', 'FORGE');
    } elseif ($int === 2) {
        define('SHOW_PROMO', 'VAPOR');
    } elseif ($int === 3) {
        define('SHOW_PROMO', 'PARTNERS');
    }
}

Route::get('docs', [DocsController::class, 'showRootPage']);

Route::get('docs/6.0/{page?}', function ($page = null) {
    $page = $page ?: 'installation';
    $page = $page == '9.x' ? 'installation' : $page;

    return redirect(trim('/docs/9.x/'.$page, '/'), 301);
});

Route::get('docs/{version}/{page?}', [DocsController::class, 'show'])->name('docs.version');

Route::redirect('partners', 'https://partners.laravel.com');

Route::get('partner/{partner}', function ($partner) {
    return redirect('https://partners.laravel.com/partners/'.$partner, 301);
});

Route::get('/', function () {
    return view('marketing', [
        'logos' => collect([
            [
                'company' => 'Bankrate',
                'logo-height' => 24,
            ],
            [
                'company' => 'WWE',
                'logo-height' => 42,
            ],
            [
                'company' => 'twitch',
                'logo-height' => 32,
            ],
            [
                'company' => 'The New York Times',
                'logo-height' => 31,
            ],
            [
                'company' => 'Disney',
                'logo-height' => 39,
            ],
            [
                'company' => 'Warner Bros',
                'logo-height' => 37,
            ],
            [
                'company' => 'About You',
                'logo-height' => 28,
            ],
            [
                'company' => 'St. Jude',
                'logo-height' => 61,
            ],
        ])->shuffle(),
    ]);
});

Route::get('team', function () {
    return view('team', [
        'team' => [
            [
                'name' => 'Taylor Otwell',
                'github_username' => 'taylorotwell',
                'twitter_username' => 'taylorotwell',
                'location' => 'United States',
            ], [
                'name' => 'Dries Vints',
                'github_username' => 'driesvints',
                'twitter_username' => 'driesvints',
                'location' => 'Belgium',
            ], [
                'name' => 'James Brooks',
                'github_username' => 'jbrooksuk',
                'twitter_username' => 'jbrooksuk',
                'location' => 'United Kingdom',
            ], [
                'name' => 'Nuno Maduro',
                'github_username' => 'nunomaduro',
                'twitter_username' => 'enunomaduro',
                'location' => 'Portugal',
            ], [
                'name' => 'Mior Muhammad Zaki Mior Khairuddin',
                'github_username' => 'crynobone',
                'twitter_username' => 'crynobone',
                'location' => 'Malaysia',
            ],
        ]
    ]);
});
