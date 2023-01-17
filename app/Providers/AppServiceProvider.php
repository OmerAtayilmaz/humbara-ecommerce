<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\TopBanner;
use App\Models\CourseCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
    public function boot()
    {
        //sharing data with all views
        $topBanner=TopBanner::first();
        if(!empty($topBanner))
            View::share('topBanner',$topBanner);

        $categoryList=CourseCategory::where('status','ACTIVE')->limit(5)->get();
        if(!empty($categoryList))
            View::share('categoryList',$categoryList);

    }
}
