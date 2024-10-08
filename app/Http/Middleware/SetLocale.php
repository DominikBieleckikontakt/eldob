<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) {
            App::setLocale(session('locale'));
            Log::info('SetLocale Middleware działa: ' . session('locale'));
        }
        return $next($request);
    }
}

