<?php

use App\Documentation;
use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '11.x');
}

Route::get('docs', [DocsController::class, 'showRootPage']);

Route::get('docs/cashier', function () {
    return redirect(trim('/docs/'.DEFAULT_VERSION.'/billing/'), 301);
});

Route::get('docs/{version}/cashier', function ($version) {
    return redirect(trim('/docs/'.$version.'/billing/'), 301);
});

Route::get('docs/6.0/{page?}', function ($page = null) {
    $page = $page ?: 'installation';
    $page = $page == DEFAULT_VERSION ? 'installation' : $page;

    return redirect(trim('/docs/'.DEFAULT_VERSION.'/'.$page, '/'), 301);
});

Route::get('docs/{version}/index.json', [DocsController::class, 'index']);
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
})->name('marketing');

// Route::get('team', function () {
//     return view('team', [
//         'team' => [
//             [
//                 'name' => 'Taylor Otwell',
//                 'github_username' => 'taylorotwell',
//                 'twitter_username' => 'taylorotwell',
//                 'location' => 'United States',
//             ], [
//                 'name' => 'Dries Vints',
//                 'github_username' => 'driesvints',
//                 'twitter_username' => 'driesvints',
//                 'location' => 'Belgium',
//             ], [
//                 'name' => 'James Brooks',
//                 'github_username' => 'jbrooksuk',
//                 'twitter_username' => 'jbrooksuk',
//                 'location' => 'United Kingdom',
//             ], [
//                 'name' => 'Nuno Maduro',
//                 'github_username' => 'nunomaduro',
//                 'twitter_username' => 'enunomaduro',
//                 'location' => 'Portugal',
//             ], [
//                 'name' => 'Mior Muhammad Zaki Mior Khairuddin',
//                 'github_username' => 'crynobone',
//                 'twitter_username' => 'crynobone',
//                 'location' => 'Malaysia',
//             ], [
//                 'name' => 'Jess Archer',
//                 'github_username' => 'jessarcher',
//                 'twitter_username' => 'jessarchercodes',
//                 'location' => 'Australia',
//             ], [
//                 'name' => 'Guus Leeuw',
//                 'github_username' => 'phpguus',
//                 'twitter_username' => 'phpguus',
//                 'location' => 'Ireland',
//             ], [
//                 'name' => 'Tim MacDonald',
//                 'github_username' => 'timacdonald',
//                 'twitter_username' => 'timacdonald87',
//                 'location' => 'Australia',
//             ], [
//                 'name' => 'Joe Dixon',
//                 'github_username' => 'joedixon',
//                 'twitter_username' => '_joedixon',
//                 'location' => 'United Kingdom',
//             ], [
//                 'name' => 'Christoph Rumpel',
//                 'github_username' => 'christophrumpel',
//                 'twitter_username' => 'christophrumpel',
//                 'location' => 'Austria',
//             ], [
//                 'name' => 'Mohamed Said',
//                 'github_username' => 'themsaid',
//                 'twitter_username' => 'themsaid',
//                 'location' => 'Dubai',
//             ],
//         ]
//     ]);
// })->name('team');

Route::view('frontend', 'frontend')->name('frontend');

Route::view('trademark', 'trademark')->name('trademark');

Route::get('careers', function () {
    $jobs = Cache::remember('jobs', 3600, function () {
        return Http::withToken(
            config('services.workable.token')
        )->get('https://laravel.workable.com/spi/v3/jobs')['jobs'];
    });

    $jobs = collect($jobs)->filter(fn ($job) => $job['state'] === 'published')->all();

    return view('careers', ['jobs' => $jobs]);
})->name('careers');
