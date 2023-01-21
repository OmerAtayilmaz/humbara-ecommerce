<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OnlineCourseCatalog;
use App\Models\SpecialCourses;
use Illuminate\Http\Request;

class SpecialCoursesController extends Controller
{

    public function all_courses_index()
    {
       $off_courses=SpecialCourses::with("course")->allCourses()->get();
       $online_courses=OnlineCourseCatalog::activeCourses()->with("course")->get();
       $page_title="All Courses List";
       $status="all-course";
       return view("backoffice.special.index",compact('status','page_title','off_courses','online_courses'));
    }
    public function best_courses_index()
    {
       $off_courses=SpecialCourses::with("course")->BestCourses()->get();
       $online_courses=OnlineCourseCatalog::activeCourses()->with("course")->get();
       $page_title="Best Courses List";
       $status="best-course";
       return view("backoffice.special.index",compact('status','page_title','off_courses','online_courses'));
    }
    public function latest_courses_index()
    {
       $off_courses=SpecialCourses::with("course")->LatestCourses()->get();
       $online_courses=OnlineCourseCatalog::activeCourses()->with("course")->get();
       $page_title="Latest Courses List";
       $status="latest-course";
        return view("backoffice.special.index",compact('status','page_title','off_courses','online_courses'));
    }
    public function featured_courses_index()
    {
       $off_courses=SpecialCourses::with("course")->FeaturedCourses()->get();
       $online_courses=OnlineCourseCatalog::activeCourses()->with("course")->get();
       $page_title="Featured Courses List";
       $status="featured-course";
       return view("backoffice.special.index",compact('status','page_title','off_courses','online_courses'));
    }
    public function off_courses_index()
    {
        $off_courses=SpecialCourses::with("course")->OffCourses()->get();
        $online_courses=OnlineCourseCatalog::activeCourses()->with("course")->get();
        $page_title="Off Courses List";
        $status="off-course";
        return view("backoffice.special.index",compact('status','page_title','off_courses','online_courses'));
    }

    public function store(Request $request)
    {

        $sCourse=new SpecialCourses();
        $sCourse->category=$request->category;
        $sCourse->course_id=request('course_id');
        $sCourse->status=$request->status;
        $sCourse->save();
        return redirect()->back()->with("success","Off Course Added Gracefully");
    }
    public function update($id){
        $featuredCourse=SpecialCourses::find($id);

        if($featuredCourse->status=='active'){
            $featuredCourse->status='inactive';
        }
        else
            $featuredCourse->status='active';
        $featuredCourse->save();
        return redirect()->back()->with('success',"Updated gracefully");
    }
    public function destroy($id){
        $selectedCourse=SpecialCourses::find($id);
        $selectedCourse->status='deleted';
        $selectedCourse->save();
        return redirect()->back()->with("warning","Featured Course Deleted Gracefully");
    }

}
