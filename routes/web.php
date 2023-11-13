<?php

use App\Team;
use App\Logos;
use App\Documentation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

Route::group(['prefix' => 'docs'], function () {
    Route::get('/', [DocsController::class, 'showRootPage']);

    Route::get('/cashier', function () {
        return redirect(trim(Documentation::getLink('billing/')), 301);
    });

    Route::get('/{version}/cashier', function ($version) {
        return redirect(trim(Documentation::getLink('billing/'), $version), 301);
    });

    Route::get('/6.0/{page?}', function ($page = null) {
        $page = $page ?: 'installation';
        $page = $page == Documentation::getLatestLaravelVersion() ? 'installation' : $page;

        return redirect(trim(Documentation::getLink("$page/")), 301);
    });

    Route::get('/{version}/index.json', [DocsController::class, 'index']);
    Route::get('/{version}/{page?}', [DocsController::class, 'show'])->name('docs.version');
});

Route::redirect('partners', 'https://partners.laravel.com');

Route::get('partner/{partner}', function ($partner) {
    return redirect('https://partners.laravel.com/partners/'.$partner, 301);
});

Route::get('/', function () {
    return view('marketing', [
        'logos' => Logos::get()->shuffle(),
    ]);
})->name('marketing');

Route::get('team', function () {
    return view('team', [
        'team' => Team::getTeamMembers()
    ]);
})->name('team');

Route::get('/frontend', function () {
    return view('frontend');
})->name('frontend');

Route::get('/trademark', function () {
    return view('trademark');
})->name('trademark');
