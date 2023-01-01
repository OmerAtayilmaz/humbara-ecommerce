<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Services\Pricing;
use App\Models\CourseCart;
use Auth;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($slug,$id)
    {
        $course=Course::getActiveCourse($id);
        $course->price=Pricing::getPrice($course->course_price);
        return view('storefront.courses.detail',compact('course'));
    }


    public function add_cart($slug,$id)
    {
        $course_id=$id;
        $user_id=Auth::user()->id;

        $isAlreadyExist=CourseCart::where('course_id',$course_id)->first();
        if(!$isAlreadyExist){
            $cart=new CourseCart();
            $cart->course_id=$course_id;
            $cart->user_id=$user_id;
            $cart->save();
        }
        return redirect()->back()->with("success","Added Gracefully");
    }

    public function remove_cart($slug,$id){
        $courseCart=CourseCart::find($id);
        $courseCart->delete();
        return redirect()->back()->with("success","Deleted Gracefully");
    }


    public function coursecart(){
        return view('storefront.courses.cart');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
