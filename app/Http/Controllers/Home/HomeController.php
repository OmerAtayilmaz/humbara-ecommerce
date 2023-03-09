<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Mail\RegisterationMail;
use App\Mail\ResetPasswordMail;
use App\Models\CourseCart;
use App\Models\CourseCategory;
use App\Models\Faq;
use App\Models\OnlineCourseCatalog;
use App\Models\SpecialCourses;
use App\Strategies\ClearCartAfterPaymentSuccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactMessage;
use App\Models\User;
use App\Models\HomeSlider;
use App\Models\Course;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

class HomeController extends Controller
{



    public function facetmanagement(){
        $courseList=Course::all();
        return view("storefront.facetmanagement",compact("courseList"));
    }
    public function facetmanagementpost(Request $req){

        $courses = Course::with(["user","course_price"])->get();
        return $courses;
    }
    public function index()
    {
        ClearCartAfterPaymentSuccess::ClearUserCart(6);
        $heroSlides=HomeSlider::where('status','ACTIVE')->get();
       // $offCourses=Course::with("course_price")->where('status','ACTIVE')->limit(4)->get();
        $featuredCourses=SpecialCourses::with(["course","course.user"])->FeaturedForStorefront()->get();
        $offCourses=SpecialCourses::with(["course","course.user"])->OffForStorefront()->get();
        $faqs=Faq::FaqsForStoreFront()->get();
        return view('storefront.home.index',compact("offCourses","heroSlides","featuredCourses","faqs","featuredCourses"));
    }
    public function offcourses(){
        return view("storefront.courses.show-all");
    }
    public function allcourses(){
        /*["course"=>[
            "user"
        ]*/
        $courses=SpecialCourses::with("course")->allForStorefront()->get();
        $categories=CourseCategory::ActiveCategories()->select("id","title_en","title_tr","slug_en","slug_tr")->get();
      //  dd(strlen($courses));
        return  view('storefront.courses.all',compact("courses","categories"));
    }
    public function bestcourses(){
        $courses=SpecialCourses::with("course")->BestForStorefront()->get();
        $categories=CourseCategory::ActiveCategories()->select("id","title_en","title_tr","slug_en","slug_tr")->get();
        return view('storefront.courses.best',compact("courses","categories"));
    }
    public function latestcourses(){
        $courses=SpecialCourses::with("course")->LatestForStorefront()->get();
        $categories=CourseCategory::ActiveCategories()->select("id","title_en","title_tr","slug_en","slug_tr")->get();
        return view('storefront.courses.latest',compact("courses","categories"));
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
        $cartCourses = Auth::user()->shoppingCartItem;
        $similarCourses = OnlineCourseCatalog::SimilarCourses()->get();
        return view('storefront.courses.cart',compact('cartCourses','similarCourses'));
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
    public function send_reset_token(Request $req){
        $email=$req->input("email");
        $user=User::where('email',$email)->first();
        if($user){
            //id gereklidir! Selectte id olmalıdır.
            $user->reset_password_token=Str::random(40);
            $user->reset_password_expired=Carbon::now()->addMinute(120);
            $user->save();
            $mail=new ResetPasswordMail($user);
            Mail::to($user->email)->send($mail);
        }else{
            return back()->with("error","There is no user found with provided e-mail");
        }
        return view("storefront.auth.forgot-password-success");
    }

    public function reset_password_form(Request $req){
        //token yoksa anasayfaya atar
        if(!isset($req->token))
            return redirect()->route("home");

        return view("storefront.auth.forgot-password-update");
    }
    public function reset_password_update(Request $req){

        //TODO: Where şartları ayrılıp ayrı ayrı validasyon eklenecek.

        $token=$req->token;
        $pass=$req->input("password");
        $c_pass=$req->input("cpassword");
        $email=Crypt::decryptString($req->email);

        //token-email validate
        if(!isset($req->token)||!isset($req->email))
            return redirect()->route("home");
        //are the passwords same?
        if($pass!=$c_pass)
            return redirect()->back()->with("error","Password does not confirmed.");


        $user=User::where('email',$email)
            ->where('reset_password_token',$token)
            ->where('reset_password_expired','>',now())
            ->update(
                [
                    'password'=>bcrypt($pass),
                    'reset_password_expired'=>null,
                    'reset_password_token'=>null
                ]
            );
        if($user)
            return redirect()->route("home")->with("success","The password has been reset gracefully!.");

        return redirect()->back()->with("error","Something went wrong!");

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
        if(count($fullname)>1){
        $firstname = $fullname[0];
        $secondname= $fullname[1];
        }
        else{
            $firstname=$fullname;
            $secondname="";
        }
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
       $courses=OnlineCourseCatalog::GetOnlineCoursesBySearch($search)->get();
       return view('storefront.courses.search-list',compact('courses'))->with("search",$search);
    }

    public function coursesByCategory($id){
        $courses=OnlineCourseCatalog::GetOnlineCoursesByCategory($id)->get();
        return view('storefront.courses.bycategory',compact('courses'));
    }

    public function user_email_verify_panel(){
       return view("storefront.auth.verify-email");
    }
    public function user_email_verify_post(Request $req){
       if(Auth::check()){
            $user=Auth::user();
            $mail=new RegisterationMail($user);
            Mail::to($user->email)->send($mail);
        }

        return view("storefront.auth.verify-email-send");
    }
    public function user_email_verified(Request $req){
        $email=Crypt::decryptString($req->token);
        $user=User::where('email',$email)->first();
        //eger böyle bir kullanıcı yoksa
        if(!$user)
            return redirect()->route("home");

        //daha önce aktif etmişse ve linke tekrar tıklarsa
        if($user->email_verified_at!=null)
            return view("storefront.auth.verify-email-success",["message"=>"Email hesabınız daha önce onaylanmıştır."]);

        //daha önce aktif etmemişse
        $user->email_verified_at=now();
        $user->save();
        return view("storefront.auth.verify-email-success")->with("message","Email hesabınız başarıyla onaylandı");

    }

}
