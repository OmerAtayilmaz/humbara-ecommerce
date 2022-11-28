<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactMessage;
use App\Models\User;
use App\Models\TopBanner;
use App\Models\HomeSlider;
use App\Models\Course;
use App\Models\CoursePrice;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index()
    {
        $slides=HomeSlider::where('status','ACTIVE')->get();
        $OFF_COURSES=Course::where('status','ACTIVE')->limit(4)->get();
        $FEATURED_COURSES=Course::where('status','ACTIVE')->limit(4)->get();
        return view('storefront.home.index',[
            'heroSlides'=>$slides,
            'offCourses'=>$OFF_COURSES,
            'featuredCourses'=>$FEATURED_COURSES
        ]);
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
        if(Auth::user())
            return redirect()->route('home');
        return view('storefront.auth.login');
    }
    public function logout(){
        return view('storefront.auth.logout');
    }
    public function register(){
        if(Auth::user())
            return redirect()->route('home');
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
    public function contactusstore(Request $req){
        $temp=new ContactMessage();
        $temp->name=$req->name;
        $temp->email=$req->email;
        $temp->message=$req->message;
        $temp->ip_address=request()->ip();
        $temp->status='ACTIVE';
        $temp->save();
        return redirect()->back();
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

    public function forgotpasswordreqtoken(){
        return view("storefront.auth.forgot-password-reqtoken");
    }

    public function loginreq(Request $req){

        Auth::attempt([
            'email'=>$req->email,
            'password'=>$req->password
        ]);
        return redirect()->route('home');
    }

    public function registerreq(Request $req){
        $temp=new User();
        $fullname  = explode(" ", $req->name);
        $firstname = $fullname[0];
        $secondname= $fullname[1];
        $temp->name=$firstname;
        $temp->surname=$secondname;
        $temp->email=$req->email;
        $temp->password=Hash::make($req->password);
        $temp->save();
        Auth::login($temp);
        return redirect()->route('home');    
    }
    public function creators(){
        return view('storefront.courses.creator-list');
    }
    public function creatordetail(){
        return view('storefront.courses.creator');
    }
    public function search(){
       $search=request("query");
       $data=Course::where('status','<>','DELETED')
        ->where(function($query) use ($search){
            return $query->where('title','LIKE',"%".$search."%")
                    ->orWhere('lang','LIKE','%'.$search.'%')
                    ->orWhere('description','LIKE','%'.$search.'%')
                    ->orWhere('keywords','LIKE','%'.$search.'%')
                    ->orWhere('content','LIKE','%'.$search.'%');
        })->get(); 
        return view('storefront.courses.search-list')->with('courseList',$data)->with("search",$search);
    }

    public function coursesByCategory($id){
        $data=Course::where('status','ACTIVE')
        ->where('category_id',$id)->get();
        return view('storefront.courses.bycategory')->with('courseList',$data);
    }
}
