<?php

if (! defined('DEFAULT_VERSION')) {
    define('DEFAULT_VERSION', '5.8');
}

Route::get('docs', 'DocsController@showRootPage');
Route::get('docs/{version}/{page?}', 'DocsController@show');

Route::get('/', function () {
    return view('marketing');
});
