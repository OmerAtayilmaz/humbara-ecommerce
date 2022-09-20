<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course_content_page(){
        return view('backoffice.courses.content');
    }
    public function coursedetail(){
        return view('backoffice.courses.detail');
    }
    /*    $table->id()->autoIncrement();
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->longtext('content');
            $table->string('slug');
            $table->foreignId('course_owner')->references('id')->on('users')->onDelete('cascade');
            $table->string('image');
            $table->foreignId('category_id');
            $table->string('status');
            $table->timestamps(); */

    public function store(Request $request){
        $course=new Course();
        $course->title=$request->title;
        $course->description=$request->description;
        $course->keywords=$request->keywords;
        $course->content=$request->content;
        $course->slug=$request->slug;
        $course->course_owner=$request->course_owner;
        $course->image=$request->image;
        $course->category_id=$request->category_id;
        $course->status=$request->status;
        $course->save();
        return redirect()->route('admin.courses');
    }
}
