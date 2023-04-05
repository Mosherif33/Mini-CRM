<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->hasHeader('accept-language')) {
            $locale = $request->getPreferredLanguage(config('app.locales'));
        } elseif ($request->hasCookie('locale')) {
            $locale = $request->cookie('locale');
        } else {
            $locale = config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
