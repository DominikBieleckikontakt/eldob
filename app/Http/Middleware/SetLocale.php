<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Pobierz język z URL-u
        $locale = $request->segment(1);

        // Sprawdź, czy wybrany język jest poprawny
        if (!in_array($locale, ['pl', 'en', 'de', 'cz'])) {
            $locale = 'pl';
        }

        Log::info('Ustawienie języka na: ' . $locale);  // Zaloguj wybór języka

        // Ustaw język aplikacji Laravel
        App::setLocale($locale);

        return $next($request);
    }
}

