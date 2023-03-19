<?php

namespace App\Models;

use App\Utils\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseCatalog extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasOne(Course::class,"id","course_id");
    }

    public function scopeActiveCourses($query){
        return $query->where('status',OrderStatus::ACTIVE);
    }
    // Get online courses by course category id
    public function scopeGetOnlineCoursesByCategory($query,$category_id){
        return $query->activeCourses()->whereHas("course",function($q) use ($category_id){
            $q->where("category_id",$category_id);
        })->with(["course" => function($q){
            $q->with("user");
            $q->with("course_price");
        }]);
    }
    public function scopeGetOnlineCoursesBySearch($query,$search){
        return $query->activeCourses()->whereHas("course",function($q) use ($search){
            $q->where("title","like","%$search%")
            ->orWhere('lang','LIKE','%'.$search.'%')
                ->orWhere('description','LIKE','%'.$search.'%')
                ->orWhere('keywords','LIKE','%'.$search.'%')
                ->orWhere('content','LIKE','%'.$search.'%');
        })->with(["course" => function($q){
            $q->with("user");
            $q->with("course_price");
        }]);
    }

    // TODO:  Similar Courses Strategy is not implemented yet.
    public function scopeSimilarCourses($query){
        return $query->activeCourses()->limit(4)->with(["course"=>function($q){
            $q->select("id","title","course_owner","card_image","slug");
            $q->with([ "user" => function($q){
                $q->select("id", "name", "profile_photo_path");
            }]);
            $q->with("course_price");
        }]);
    }

}
