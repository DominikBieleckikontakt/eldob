<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // Logowanie całego URL
        Log::info('Pełny URL: ' . $request->fullUrl());
        
        // Pobierz język z URL-u (pierwszy segment)
        $locale = $request->segment(1);

        // Zaloguj segmenty URL
        Log::info('Segmenty URL: ' . json_encode($request->segments()));

        // Sprawdź, czy wybrany język jest poprawny
        if (!in_array($locale, ['pl', 'en', 'de', 'cz'])) {
            Log::info('Niepoprawny język: ' . $locale . ', ustawiam domyślny: pl');
            $locale = 'pl';  // Ustaw domyślny język na 'pl', jeśli prefiks nie jest poprawny
        } else {
            Log::info('Wybrany język: ' . $locale);
        }

        // Ustaw język aplikacji Laravel
        App::setLocale($locale);

        return $next($request);
    }
}
