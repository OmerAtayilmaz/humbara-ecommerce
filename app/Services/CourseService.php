<?php
namespace App\Services;

use App\Models\Course;
use App\Models\OnlineCourseCatalog;

class CourseService {


    public function PublishCourse($id):bool{
     try{
            $course=Course::find($id);
            $item=new OnlineCourseCatalog();
            $item->course_id=$course->id;
            $item->status='active';
            $item->save();
            return "success";
        }
        catch (\Exception $exception){
            return "Something went wrong!";
        }
    }
    public function GetOnlyStagedCoursesList(){
        $onlineCourseIds=OnlineCourseCatalog::pluck("course_id");
        $courseList=Course::whereNotIn('id',$onlineCourseIds)->get();
        return $courseList;
    }
}
