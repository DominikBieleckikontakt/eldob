<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class RedirectIfNoLocale
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('RedirectIfNoLocale Middleware działa');
        
        if (!in_array($request->segment(1), ['en', 'pl', 'de', 'cz'])) {
            return redirect()->to('/pl' . $request->getRequestUri());
        }

        return $next($request);
    }
}

