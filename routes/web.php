<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\UserController;

/*
Admin
    Kullanıcı
        Listeler
        User Detaylarını Görür.
        Siler.
        Aldığı Kursları görür.
        Rollerini görür.
        Favorilere eklediklerini görür. USER-FAVOURITES
        Sipariş geçmişini görür. USER-ORDER
        Reviewlerini yönetir.
        Credit-cards listeler
    Kurs
        Listeler
        Oluşturur
        Siler
        Kurs_content CRUD
        Kursu alanları görür.
        Kursa yapılan yorumları görür.
        Kurs Q&A Görür 
        Kurs siparişlerini görür.
        Kursu sepete ekleyenleri görür.
    FAQ
        CRUD
        Sıralar
    
    Settings
        Yönetir

    Themes
        Yönetir.

    Sipariş
        Listeler
        Detayını görür.
        Sipariş eden userin detaylarını görür.
        Sipariş edilen kursun/kursların detaylarını görür.
    
INSTRUCTOR
    Kurs yükler

USER
    Profilini Yönetir
    Satın aldığı kursları listeler
    satın aldığı kursları arşivler
    satın aldığı kursları izler
    kursu favoriye ekler
    Kurs izler
*/

/* HOME ROUTES */
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::redirect('/home','/');
    Route::get('/all-courses','allcourses')->name('allcourses');
    Route::get('/best-courses','bestcourses')->name('bestcourses');
    Route::get('/latest-courses','latestcourses')->name('latestcourses');
    Route::get('/all-assets','allassets')->name('allassets');
    Route::get('/best-assets','bestassets')->name('bestassets');
    Route::get('/latest-assets','latestassets')->name('latestassets');
    Route::get('cart','coursescart')->name('coursescart');

    Route::get("course/{slug}-{courseid}","coursedetail")->name("coursedetail");

    //official
    Route::get('terms-conditions','termsconditions')->name('termsconditions');
    Route::get('privacy-policy','privacypolicy')->name('privacypolicy');
    Route::get('cookies','cookies')->name('cookies');
    Route::get('/contactus','contactus')->name('contactus');
    Route::get('/aboutus','aboutus')->name('aboutus'); 

    //Auth
    Route::get('/u-login','login')->name('userloginpanel');
    Route::get('/u-register','register')->name('userregisterpanel');
    Route::get('/f-password','forgotpassword')->name('userforgotpasswordpane');
});


/* USER ROUTES */
Route::middleware('auth')->prefix('user')->controller(UserController::class)->name('user.')->group(function(){
    Route::get('/my-profile',"profile")->name('profile');
    Route::get("/my-courses","courses")->name("courses");
    Route::get("/my-courses/archived","archivedcourses")->name("archivedcourses");
    Route::get("/my-courses/favourites","favourites")->name("favourites");
    Route::get("/order-history","order-history")->name("order-history");

    //kurs ders izleme linki
    Route::get("/course/{slug}-{courseid}/learn/lecture/{lectureid}");

    //kurs sepeti
    Route::get("cart","coursecart")->name("coursecart");
    Route::get("checkout","coursecheckout")->name("coursecheckout"); //sepette satın ala tıklandığında açılacak ödeme sayfası
});

/* ADMIN ROUTES */
Route::middleware('auth')->prefix('/backoffice')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,"index"])->name('index');
    Route::get('/user',[AdminController::class,"userlist"])->name('userlist');
    Route::get('/user/show/{userid}',[AdminController::class,"userdetail"])->name('usershow');
    Route::get('/user/roles/{userid}',[AdminController::class,"userroles"])->name('userroles');
    Route::get('/user/favourites/{userid}',[AdminController::class,"userfavourites"])->name('userfavourites');
    Route::get("/user/{userid}/order-history-list/",[AdminController::class,"userorderhistorylist"])->name("userorderhistorylist");
    Route::get("/user/{userid}/credit-cards",[AdminController::class,"usercreditcardslist"])->name("usercreditcardslist");

    Route::get('/category',[AdminController::class,'categorylist'])->name('categorylist');
    Route::get('/category/{categoryid}',[AdminController::class,'categoryshow'])->name('categoryshow');

    Route::get('/slides',[AdminController::class,"slideslist"])->name('slideslist');
    Route::get('/slides/show/{slideid}',[AdminController::class,"slideshow"])->name('slideshow');

    Route::get("/faq",[AdminController::class,"faq"])->name('faq');
    Route::get("/faq/{id}",[AdminController::class,"faqshow"])->name('faqshow');

    Route::get("/settings",[AdminController::class,"settings"])->name('settings');
    Route::get("/themes",[AdminController::class,"themes"])->name('themes');
    //kullanıcılar sekmesinden erişilir.
    Route::get("/favourites",[AdminController::class,"favourites"])->name('favourites');

    Route::get("/messages",[AdminController::class,"messages"])->name('messages');
    Route::get("/messages/show/{messageid}",[AdminController::class,"showmessage"])->name('showmessage');
    
    Route::get("/orders",[AdminController::class,"orders"])->name('orders');
    Route::get("/orders/show/{orderid}",[AdminController::class,"showorders"])->name('showorders');

    Route::get("/courses",[AdminController::class,"courses"])->name('courses');
    Route::get("/course/create",[AdminController::class,"createcourse"])->name('createcourse');
    Route::post("/course/create",[CourseController::class,"store"])->name('storecourse');
    Route::get("/course/detail/{courseid}",[CourseController::class,"coursedetail"])->name('coursedetail');
    Route::get("/course/content/{courseid}",[CourseController::class,"course_content_page"])->name('course_content_page');
    Route::get("/course/lessons/{id}",[CourseController::class,"course_lessons_page"])->name('course_lessons_page');

    Route::get("/course-prices/{cid}",[CourseController::class,"course_price_list"])->name("course_price_list");
    Route::get("/user/courses",[CourseController::class,"user_courses_list"])->name("user_courses_list"); // kullanıcının satın aldıgı kurslar

    
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
