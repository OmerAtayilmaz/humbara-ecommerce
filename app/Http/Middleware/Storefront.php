<?php

namespace App\Http\Middleware;

use App\Models\TopBanner;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class Storefront
{

    public function handle(Request $request, Closure $next)
    {
        //sharing data with all views
        $topBanner=TopBanner::first();
        if(!empty($topBanner)){
            $banner_data=(object)[
                "title"=>"",
                "text"=>""
            ];
            if(request()->cookie("lang")=='en'){
                $banner_data->title=$topBanner->title_en;
                $banner_data->text=$topBanner->text_en;

            }else{
                $banner_data->title=$topBanner->title_tr;
                $banner_data->text=$topBanner->text_tr;
            }

            View::share('topBanner',$banner_data);
        }

        if(Auth::user()){
            $cartInfo=count(Auth::user()->shoppingCartItem);
            $request->cartInfo=$cartInfo;
        }
        return $next($request);
    }
}
