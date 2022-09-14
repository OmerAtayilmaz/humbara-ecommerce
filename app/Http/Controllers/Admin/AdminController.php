<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{

    public function index()
    {
        return view('backoffice.dashboard');
    }

    public function userlist(){
        return view('backoffice.user.index');
    }

    //CREATE
    public function categorylist(){
        return view('backoffice.category.index');
    }

    public function slideslist(){ 
        return view('backoffice.slides.index');
    }

    
  
}
