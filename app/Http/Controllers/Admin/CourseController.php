<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
class CourseController extends Controller
{
    public function course_content_page(){
        return view('backoffice.courses.content');
    }
    public function coursedetail($courseid){
        $course=Course::find($courseid);
        return view('backoffice.courses.detail',[
            'course'=>$course
        ]);
    }

    public function store(Request $request){
        try{
        $course=new Course();
        $course->title=$request->title;
        $course->keywords=$request->keywords;
        $course->description=$request->description;
        $course->video_url=$request->video_url;
        $course->content=$request->content;
        $course->slug=Str::slug($request->title);
        $course->course_owner=Auth::user()->id;
        $course->category_id=$request->category_id;
        $course->status=$request->status;
        $course->lang=$request->lang;
        $course->save();
    }catch(\Exception $e){
        return $e->getMessage();
    }
        return redirect()->route('admin.courses');
    }
}
