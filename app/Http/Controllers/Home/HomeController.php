<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('storefront.home.index');
    }
    public function allcourses(){
        return  view('storefront.courses.all');
    }
    public function bestcourses(){
        return view('storefront.courses.best');
    }
    public function latestcourses(){
        return view('storefront.courses.latest');
    }
    public function allassets(){
        return  view('storefront.assets.all');
    }
    public function bestassets(){
        return view('storefront.assets.best');
    }
    public function latestassets(){
        return view('storefront.assets.latest');
    }
    public function coursescart(){
        return view('storefront.courses.cart');
    }
    public function login(){
        return view('storefront.auth.login');
    }
    public function logout(){
        return view('storefront.auth.logout');
    }
    public function register(){
        return view('storefront.auth.register');
    }
    public function termsconditions(){
        return view('storefront.pages.termsconditions');
    }
    public function privacypolicy(){
        return view('storefront.pages.privacypolicy');
    }
    public function contactus(){
        return view('storefront.pages.contactus');
    }
    public function aboutus(){
        return view('storefront.pages.aboutus');
    }
    public function cookies(){
        return view('storefront.pages.cookies');
    }
    public function forgotpassword(){ 
        return view('storefront.auth.forgot-password');
    }
}
