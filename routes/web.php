<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
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


/* ADMIN ROUTES */
Route::middleware('auth')->prefix('/backoffice')->name('admin.')->group(function(){
    Route::get('/',[AdminController::class,"index"])->name('index');
    //Route::get('/','logout')->name('logout');
    Route::get('/user',[AdminController::class,"userlist"])->name('userlist');
    Route::get('/user/show/{userid}',[AdminController::class,"userdetail"])->name('usershow');
    Route::get('/user/roles/{userid}',[AdminController::class,"userroles"])->name('userroles');
    Route::get('/category',[AdminController::class,'categorylist'])->name('categorylist');
    Route::get('/slides',[AdminController::class,"slideslist"])->name('slideslist');
    Route::get('/slides/show/{slideid}',[AdminController::class,"slideshow"])->name('slideshow');
    Route::get("/faq",[AdminController::class,"faq"])->name('faq');
    Route::get("/faq/{id}",[AdminController::class,"faqshow"])->name('faqshow');
    Route::get("/settings",[AdminController::class,"settings"])->name('settings');
    Route::get("/themes",[AdminController::class,"themes"])->name('themes');
    Route::get("/favourites",[AdminController::class,"favourites"])->name('favourites');
    Route::get("/messages",[AdminController::class,"messages"])->name('messages');
    Route::get("/orders",[AdminController::class,"orders"])->name('orders');
    Route::get("/courses",[AdminController::class,"courses"])->name('courses');
    Route::get("/course/create",[AdminController::class,"createcourse"])->name('createcourse');
    Route::get("/course/detail/{courseid}",[CourseController::class,"coursedetail"])->name('coursedetail');
    Route::get("/course/content/{courseid}",[CourseController::class,"course_content_page"])->name('course_content_page');
    Route::get("/course/lessons/{id}",[CourseController::class,"course_lessons_page"])->name('course_lessons_page');

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
