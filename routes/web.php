<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('home');
});

Route::get('/oferta', function () {
    return view('offer.index');
});
Route::get('/oferta/{id}', function () {
    return view('offer.show');
});

Route::get('/sprzedaz', function () {
    return view('sale');
});

Route::get('/realizacje', function () {
    return view('realizations.index');
});
Route::get('/realizacje/{id}', function () {
    return view('realizations.show');
});

Route::get('/referencje', function () {
    return view('reference');
});

Route::get('/czym-sie-zajmujemy', function () {
    return view('what');
});

Route::get('/kontakt', function () {
    return view('contact');
});

Route::get('/polityka-cookies', function () {
    return view('cookies');
});

Route::get('/polityka-prywatnosci', function () {
    return view('privacy');
});

Route::get('/nasze-certyfikaty', function () {
    return view('certificates');
});

Route::get('/kalkulator-wykonania-instalacji-elektrycznej', function () {
    return view('calculator');
});


// Route::get('lang/{locale}', function ($locale) {
//     if (!in_array($locale, ['en', 'pl', 'cz', 'de'])) {
//         abort(400);
//     }

//     Session::put('locale', $locale);
//     App::setLocale($locale);

//     return redirect()->back();
// });