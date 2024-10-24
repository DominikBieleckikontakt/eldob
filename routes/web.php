<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PagesController;

Route::get('/clearcache', function () {
    // Utworzenie symbolic linku dla storage
    Artisan::call('storage:link');

    // Czyszczenie cache aplikacji
    Artisan::call('cache:clear');

    // Czyszczenie cache konfiguracji
    Artisan::call('config:clear');

    // Czyszczenie cache widoków
    Artisan::call('view:clear');

    // Czyszczenie cache routingu
    Artisan::call('route:clear');

    return 'Cache został wyczyszczony, a link do storage utworzony!';
});


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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
