<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PagesController;


Route::get('/', function () {
    return redirect('/pl');
});


Route::group(['prefix' => '{lang}', 'where' => ['lang' => 'pl|en|de|cz'], 'middleware' => 'setLocale'], function () {
    Route::controller(PagesController::class)->group(function() {
        Route::get('/', 'home')->name('home');
        Route::get('/oferta', 'offers')->name('offers');
        Route::get('/oferta/{slug}', 'offer')->name('offer');
        Route::get('/realizacje', 'realizations')->name('realizations');
        Route::get('/realizacje/{slug}', 'realization')->name('realization');
        Route::get('/referencje', 'references')->name('references');
        Route::get('/kontakt', 'contact')->name('contact');
        Route::post('/kontakt/wyslij', 'sendContact')->name('sendContact');
        Route::get('/certyfikaty', 'certificates')->name('certificates');
        Route::get('/{slug}', 'page')->name('page');
    });
});

// Podstrony tekstowe: Czym sie zajmujemy, polityka prywatnosci, sprzedaz, certyfikaty

// Route::get('/sprzedaz', function () {
//     return view('sale');
// });

// Route::get('/realizacje', function () {
//     return view('realizations.index');
// });

// Route::get('/realizacje/{id}', function () {
//     return view('realizations.show');
// });

// Route::get('/referencje', function () {
//     return view('reference');
// });

// Route::get('/czym-sie-zajmujemy', function () {
//     return view('what');
// });

// Route::get('/kontakt', function () {
//     return view('contact');
// });

// Route::get('/polityka-cookies', function () {
//     return view('cookies');
// });

// Route::get('/polityka-prywatnosci', function () {
//     return view('privacy');
// });

// Route::get('/nasze-certyfikaty', function () {
//     return view('certificates');
// });

// Route::get('/kalkulator-wykonania-instalacji-elektrycznej', function () {
//     return view('calculator');
// });


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
