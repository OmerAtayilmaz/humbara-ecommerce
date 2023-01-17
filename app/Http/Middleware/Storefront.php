<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class Storefront
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()){
            $cartInfo=count(Auth::user()->shoppingCartItem);
            $request->cartInfo=$cartInfo;
        }
        return $next($request);
    }
}
