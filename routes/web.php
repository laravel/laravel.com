<?php

Route::get('/docs', function () {
    return view('documentation');
});

Route::get('/', function () {
    return view('marketing');
});
