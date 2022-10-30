<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Faq;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseReview;
use App\Models\CourseCategory;
use App\Models\Setting as SettingModel;
use App\Models\ContactMessage;
use App\Models\Favourites;
use App\Models\TopBanner;

class Response {
    public $user;
    public $course;
    public $review;
    function __construct($user,$course,$reviews){
        $this->user=$user;
        $this->course=$course;
        $this->review=$reviews;
    }
}
class AdminController extends Controller
{

    public function index()
    {
        $userQuantity=User::count();
        $courseQuantity=Course::count();
        $reviews=CourseReview::count();
        $data=new Response($userQuantity,$courseQuantity,$reviews);
        return view('backoffice.dashboard',[
            'data'=>$data
        ]);
    }

    public function userlist(){
        return view('backoffice.user.index');
    }
    public function userdetail($id){
        $user=User::find($id);
        return view('backoffice.user.show',[
            'user'=>$user
        ]);
    }
    public function userroles(){
        return view('backoffice.user.addrole');
    }

    //CREATE
    public function categorylist(){
        return view('backoffice.category.index');
    }
    public function categoryshow($categoryid){
        $category=CourseCategory::find($categoryid);
        return view('backoffice.category.show',[
            'category'=>$category
        ]);
    }

    public function slideslist(){ 
        return view('backoffice.slides.index');
    }
    public function slideshow(){
        return view('backoffice.slides.show');
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
        $settings=SettingModel::first();
        if(empty($settings)){
            $settings=new SettingModel();
            $settings->updated_by=Auth::user()->id;
            $settings->c_name='';
            $settings->c_keywords='';
            $settings->c_description='';
            $settings->c_logo='';
            $settings->c_favicon='';
            $settings->c_email=''; 
            $settings->c_phone='';
            $settings->c_address='';
            $settings->c_facebook='';
            $settings->c_twitter='';
            $settings->c_instagram='';
            $settings->c_youtube='';
            $settings->c_linkedin='';
            $settings->contact='';
            $settings->references='';
            $settings->about_us='';
            $settings->status='NEW';
            $settings->save();
        }
        return view('backoffice.settings',[
            'settings'=>$settings
        ]);
    }
    public function settingscreate(Request $request){
        $settings=SettingModel::first();
       // dd($request);
        $settings->updated_by=Auth::user()->id;
        $settings->c_name=$request->c_name;
        $settings->c_keywords=$request->c_keywords;
        $settings->c_description=$request->c_description;
        if($request->file('c_logo')!=null){
            $settings->c_logo=$request->file('c_logo')->store('images');
        }
        if($request->file('c_favicon')!=null){
            $settings->c_favicon=$request->file('c_favicon')->store('images');
        }
        $settings->c_email=$request->c_email; 
        $settings->c_phone=$request->c_phone;
        $settings->c_address=$request->c_address;
        $settings->c_facebook=$request->c_facebook;
        $settings->c_twitter=$request->c_twitter;
        $settings->c_instagram=$request->c_instagram;
        $settings->c_youtube=$request->c_youtube;
        $settings->c_linkedin=$request->c_linkedin;
        $settings->contact=$request->contact;
        $settings->references=$request->references;
        $settings->about_us=$request->about_us;
        $settings->status='UPDATED';
        $settings->save();
        return redirect()->back()->with('success','Settings updated successfully');
    }

    public function themes(){
        return view('backoffice.themes');
    }

    public function courses(){
        $courseList=Course::where('status','<>','DELETED')->get();
        return view('backoffice.courses.index',[
            'courseList'=>$courseList
        ]);
    }

    public function createcourse(){
        return view('backoffice.courses.create');
    }

    public function favourites(){
        return view('backoffice.favourites.index');
    }

    public function contactmessages(){
        return view('backoffice.contact.index');
    }
    public function showcontactmessage($messageid){
        $message=ContactMessage::find($messageid);
        if(empty($message)){
            return redirect()->back();
        }
        return view('backoffice.contact.show',[
            'message'=>$message
        ]);
    }

    public function userfavourites($userid){
        $favourites=Favourites::where('user_id',$userid)->get();
        return view('backoffice.favourites.index',['favourtiesList'=>$favourites]);
    }

    public function usercreditcards($userid){
        $user=User::find($userid);
        return view('backoffice.creditcards.index',['user'=>$user]);
    }
    
    public function shopcart($id){
        $cartItemsList=User::find($id)->shoppingCartItem;
        return view('backoffice.user.cartlist',[
            'cartItemsList'=>$cartItemsList
        ]);
    }

    public function topBanner(){
        $topBanner=TopBanner::first();
        if(empty($topBanner)){
            $topBanner=new TopBanner();
            $topBanner->title_en='';
            $topBanner->title_tr='';
            $topBanner->text_tr='';
            $topBanner->text_en='';
            $topBanner->status='ACTIVE';
            $topBanner->save();
        }
        return view('backoffice.top-banner',[
            'topBanner'=>$topBanner
        ]);
    }
    public function topBannerStore(Request $req){
        $topBanner=TopBanner::first();
        $topBanner->title_en=$req->title_en;
        $topBanner->title_tr=$req->title_tr;
        $topBanner->text_tr=$req->text_tr;
        $topBanner->text_en=$req->text_en;
        $topBanner->status=$req->status;
        $topBanner->save();
        return redirect()->back()->with('success','Top Banner updated successfully');    
    
    }
   
    
  
}
