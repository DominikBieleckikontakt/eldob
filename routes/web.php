<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PagesController;


Route::get('lang/{locale}', function($locale) {
    if (in_array($locale, ['pl', 'en', 'de', 'cz'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

// Dodaj grupę z prefiksem {locale} oraz domyślną stroną
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|pl|cz|de']], function () {
    Route::controller(PagesController::class)->group(function() {
        Route::get('/', 'home')->name('home');
        Route::get('/oferta', 'offers')->name('offers');
    });
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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
