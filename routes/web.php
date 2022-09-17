<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\AdminController;
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
    Route::get('/category',[AdminController::class,'categorylist'])->name('categorylist');
    Route::get('/slides',[AdminController::class,"slideslist"])->name('slideslist');
    Route::get("/faq",[AdminController::class,"faq"])->name('faq');
    Route::get("/faq/{id}",[AdminController::class,"faqshow"])->name('faqshow');
    Route::get("/settings",[AdminController::class,"settings"])->name('settings');
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
