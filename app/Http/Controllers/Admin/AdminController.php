<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Faq;
use App\Models\User;
use App\Models\Course;
use App\Models\CourseReview;
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
    public function userdetail(){
        return view('backoffice.user.show');
    }
    public function userroles(){
        return view('backoffice.user.addrole');
    }

    //CREATE
    public function categorylist(){
        return view('backoffice.category.index');
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
        return view('backoffice.settings');
    }

    public function themes(){
        return view('backoffice.themes');
    }

    public function courses(){
        return view('backoffice.courses.index');
    }

    public function createcourse(){
        return view('backoffice.courses.create');
    }

    public function favourites(){
        return view('backoffice.favourites.index');
    }

    public function messages(){
        return view('backoffice.messages.index');
    }
    

    
  
}
