<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{

    public function profile()
    {
        return view('storefront.user.profile');
    }

    public function coursecart(){
        return view('storefront.courses.cart');
    }

    public function coursecheckout()
    {
        return view('storefront.user.checkout');
    }
    public function checkoutsuccess(){
        return view('storefront.user.checkout-success');
    }
    public function checkoutfail(){
        return view('storefront.user.checkout-fail');
    }
    public function courses(){
        return view('storefront.user.courses');
    }
    public function logout(Request $request){
        if(!Auth::user())
            return redirect()->route('home');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }


}
