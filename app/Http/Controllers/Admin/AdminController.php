<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Faq;
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
    public function faq(){ 
        return view('backoffice.faq.index');
    }
    public function faqshow($id){
        $faq=Faq::find($id);
        if(empty($faq)){
            return redirect()->back();
        }
        return view('backoffice.faq.show',[
            'faq'=>$faq
        ]);
    }

    public function settings(){
        return view('backoffice.settings');
    }

    public function themes(){
        return view('backoffice.themes');
    }

    public function courses(){
        return view('backoffice.courses.index');
    }

    
  
}
