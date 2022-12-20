<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        App::setLocale(Cookie::get("lang")?:config('app.locale'));
        return $next($request);
    }
}
