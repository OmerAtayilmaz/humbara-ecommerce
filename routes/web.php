<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\UserController;



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

    Route::prefix("/course")->controller(CourseController::class)->group(function(){
        Route::post("/create","store")->name('storecourse');
        Route::get("/edit/{courseid}","editcourse")->name('edit_course');
        Route::post("/update/{courseid}","updatecourse")->name('update_course');
        Route::get("/delete/{courseid}","deletecourse")->name('delete_course');
        Route::get("/delete/q-a/{questionid}","delete_course_qa")->name('delete_course_qa');
        Route::get("/detail/{courseid}","coursedetail")->name('coursedetail');
        Route::get("/content/{courseid}","course_content_page")->name('course_content_page');
        Route::get("/lessons/{id}","course_lessons_page")->name('course_lessons_page');
        Route::get("/questions/{courseid}","course_questions_page")->name('course_questions_page');
        Route::get("/questions/{courseid}/detail/{questionid}","course_questions_detail")->name('course_questions_detail');
        Route::get("/{courseid}/prices/","course_price_list")->name("course_price_list");
        Route::get("/user","user_courses_list")->name("user_courses_list"); // kullanıcının satın aldıgı kurslar
    });
    

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
