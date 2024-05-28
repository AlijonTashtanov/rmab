<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Config;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $languages = config('app.languages');

        if (session()->has('locale')) {
            $locale = session()->get('locale');

            if (in_array($locale, $languages)) {
                App::setLocale($locale, Config::get('app.locale'));
            }

        } else {
            $locale = session()->put('locale', Config::get('app.locale'));

            App::setLocale($locale, Config::get('app.locale'));
        }

        return $next($request);
    }
}
