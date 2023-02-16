<?php
namespace App\Services;

use App\Models\Course;
use App\Models\OnlineCourseCatalog;
use App\Models\SpecialCourses;

class CourseService {

    private int $PAGINATION_COUNT = 10;
    public function PublishCourse($id):string{
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
        $courseList=Course::whereNotIn('id',$onlineCourseIds)->paginate($this->PAGINATION_COUNT);
        return $courseList;
    }
    public function UnpublishCourse($id):string{

        try{
        OnlineCourseCatalog::where('course_id',$id)->delete();
        SpecialCourses::where('course_id',$id)->delete();
        return "success";
        }catch (\Exception $e){
            return "fail";
        }
    }
    public function getSimilarCourses(){
        $onlineCourses = OnlineCourseCatalog::SimilarCourses();
        return $onlineCourses;
    }
}
