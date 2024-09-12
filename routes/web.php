<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});

Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'pl', 'cz', 'de'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
});