<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next): Response
    {
        // Get locale from session, cookie, user preference or request
        $locale = $request->session()->get('locale', config('app.locale'));
        
        // You can also check for URL parameter
        if ($request->has('locale')) {
            $locale = $request->get('locale');
            // Store locale in session for future requests
            $request->session()->put('locale', $locale);
        }
        
        // Set application locale
        App::setLocale($locale);
        
        return $next($request);
    }
}
