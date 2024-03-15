<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if ($locale && in_array($locale, ['en', 'es', 'fr'])) {
            App::setLocale($locale);
        } else {
            App::setLocale('en'); // Set default locale if no segment or invalid segment is provided
        }

        return $next($request);
    }
}
