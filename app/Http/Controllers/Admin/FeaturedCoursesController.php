<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\FeaturedCourses;
use Illuminate\Http\Request;

class FeaturedCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredCourses=FeaturedCourses::with("course")->whereNot('status','deleted')->get();
        $courses=Course::get(["id","title"]);
        return view('backoffice.featured.index',compact('featuredCourses','courses'));
    }

    public function store(Request $request)
    {
        $featuredCourse=new FeaturedCourses();
        $featuredCourse->priority=request('priority');
        $featuredCourse->course_id=request('course_id');
        $featuredCourse->save();
        return redirect()->back()->with("success","Featured Course Added Gracefully");
    }
    public function update($id){
        $featuredCourse=FeaturedCourses::find($id);

        if($featuredCourse->status=='active'){
            $featuredCourse->status='inactive';
        }
        else
            $featuredCourse->status='active';
        $featuredCourse->save();
        return redirect()->back()->with('success',"Updated gracefully");
    }
    public function destroy($id){
        $selectedCourse=FeaturedCourses::find($id);
        $selectedCourse->status='deleted';
        $selectedCourse->save();
        return redirect()->back()->with("warning","Featured Course Deleted Gracefully");
    }

}
