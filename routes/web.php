<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CouponsController;
use App\Http\Controllers\UserController;


/* HOME ROUTES */
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/search','search')->name('search');
    Route::get('/c/{id}','coursesByCategory')->name('courses.bycategory');
    Route::redirect('/home','/');
    Route::get('/all-courses','allcourses')->name('allcourses');
    Route::get('/best-courses','bestcourses')->name('bestcourses');
    Route::get('/latest-courses','latestcourses')->name('latestcourses');
    Route::get('/all-assets','allassets')->name('allassets');
    Route::get('/best-assets','bestassets')->name('bestassets');
    Route::get('/latest-assets','latestassets')->name('latestassets');
    Route::get('cart','coursescart')->name('coursescart');
    Route::get("course/{slug}-{courseid}","coursedetail")->name("coursedetail");
    Route::get("creators","creators")->name("creators");
    Route::get("creators/detail","creatordetail")->name("creator.detail");
    //official
    Route::get('terms-conditions','termsconditions')->name('termsconditions');
    Route::get('privacy-policy','privacypolicy')->name('privacypolicy');
    Route::get('cookies','cookies')->name('cookies');
    Route::get('/contactus','contactus')->name('contactus');
    Route::post('/contactus','contactusstore')->name('contactus.store');
    Route::get('/aboutus','aboutus')->name('aboutus'); 

    //Auth
    Route::name('user.')->group(function(){
        Route::get('/u-login','login')->name('loginpanel');
        Route::post('/u-login','loginreq')->name('loginreq');
        Route::get('/u-register','register')->name('registerpanel');
        Route::post('/u-register','registerreq')->name('registerpanelreq');
        Route::get('/f-password','forgotpassword')->name('forgotpass-panel');
        Route::get("/f-password/request","forgotpasswordreqtoken")->name("forgotpasswordreqtoken");
    });
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
    Route::get("checkout/success","checkoutsuccess")->name("checkoutsuccess"); 
    Route::get("checkout/fail","checkoutfail")->name("checkoutfail"); 
    Route::get("/courses","courses")->name("courses");
    Route::get("/logout","logout")->name("logout");
});

/* ADMIN ROUTES */
Route::middleware('auth')->prefix('/backoffice')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,"index"])->name('index');
    Route::get('/user',[AdminController::class,"userlist"])->name('userlist');
    Route::get('/user/show/{userid}',[AdminController::class,"userdetail"])->name('usershow');
    Route::get('/user/roles/{userid}',[AdminController::class,"userroles"])->name('userroles');
    Route::get('/user/favourites/{userid}',[AdminController::class,"userfavourites"])->name('userfavourites');
    Route::get("/user/{userid}/order-history-list/",[AdminController::class,"userorderhistorylist"])->name("userorderhistorylist");
    Route::prefix("/user")->group(function(){
        Route::get("creditcards/{userid}",[AdminController::class,"usercreditcards"])->name("user.creditcards");
        Route::get("shop-cart/{id}",[AdminController::class,"shopcart"])->name("user.shopcart");
    });
    Route::get('/category',[AdminController::class,'categorylist'])->name('categorylist');
    Route::get('/category/{categoryid}',[AdminController::class,'categoryshow'])->name('categoryshow');

    Route::get('/slides',[AdminController::class,"slideslist"])->name('slideslist');
    Route::get('/slides/show/{slideid}',[AdminController::class,"slideshow"])->name('slideshow');

    Route::get("/faq",[AdminController::class,"faq"])->name('faq');
    Route::get("/faq/{id}",[AdminController::class,"faqshow"])->name('faqshow');

    Route::get("/settings",[AdminController::class,"settings"])->name('settings');
    Route::post("/settings",[AdminController::class,"settingscreate"])->name('settings.store');
    Route::get("/themes",[AdminController::class,"themes"])->name('themes');
    
    //kullanıcılar sekmesinden erişilir.
    Route::get("/favourites",[AdminController::class,"favourites"])->name('favourites');

    Route::get("/contact-message",[AdminController::class,"contactmessages"])->name('contactmessages');
    Route::get("/contact-message/show/{messageid}",[AdminController::class,"showcontactmessage"])->name('contactmessages.show');
    
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
        Route::post("/prices/{priceid}","course_price_update")->name("course_price_update");
        Route::get("/user","user_courses_list")->name("user_courses_list");

        Route::prefix("/reviews")->name("course.reviews.")->group(function(){
            Route::get("/{courseid}","course_reviews_list")->name("list");
         // Route::get("/detail/{reviewid}","course_reviews_detail")->name("detail");
            Route::get("/delete/{reviewid}","course_reviews_delete")->name("delete");
        });

        Route::prefix("/images")->name("course.images.")->group(function(){
            Route::get("/{courseid}","course_images_list")->name("list");
            Route::post("/{courseid}","course_images_store")->name("store");
            Route::get("/delete/{imageid}","course_images_delete")->name("delete");
        });


    });

    Route::prefix("/coupons")->name("coupons.")->controller(CouponsController::class)->group(function(){
        Route::get("/","index")->name("index");
        Route::get("/create","create")->name("create");
        Route::post("/store","store")->name("store");
        Route::get("/show/{id}","show")->name("show");
        Route::get("/edit/{id}","edit")->name("edit");
        Route::post("/update/{id}","update")->name("update");
        Route::get("/delete/{id}","delete")->name("delete");
    });
    
    Route::prefix("/banner")->name("banner.")->controller(AdminController::class)->group(function(){
        Route::get("/","topBanner")->name("index");
        Route::post("/store","topBannerStore")->name("store");
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
