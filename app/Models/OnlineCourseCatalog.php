<?php

namespace App\Models;

use App\Utils\enums\CourseStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseCatalog extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasOne(Course::class,"id","course_id");
    }

    public function scopeActiveCourses($query){
        return $query->where('status',CourseStatus::ACTIVE);
    }

    // TODO:  Similar Courses Strategy is not implemented yet.
    public function scopeSimilarCourses($query){
        return $query->activeCourses()->limit(4)->with(["course"=>function($q){
            $q->with("user");
            $q->with("course_price");
        }]);
    }


}
