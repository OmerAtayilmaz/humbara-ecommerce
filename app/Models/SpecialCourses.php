<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialCourses extends Model
{
    use HasFactory;

    public function scopeAllCourses($query){
        return $query->where("category","all-course")->where('status','<>','deleted');
    }
    public function scopeBestCourses($query){
        return $query->where("category","best-course")->where('status','<>','deleted');
    }
    public function scopeLatestCourses($query){
        return $query->where("category","latest-course")->where('status','<>','deleted');
    }
    public function scopeFeaturedCourses($query){
        return $query->where("category","featured-course")->where('status','<>','deleted');
    }
    public function scopeOffCourses($query){
        return $query->where("category","off-course")->where('status','<>','deleted');
    }
    public function scopeActiveCourses($query){
        return $query->where("status","active");
    }
    public function course(){
        return $this->hasOne(Course::class,"id","course_id");
    }

    public function scopeAllForStorefront($query){
        return $query->activeCourses()->allCourses();
    }
    public function scopeBestForStorefront($query){
        return $query->activeCourses()->bestCourses();
    }
    public function scopeLatestForStorefront($query){
        return $query->activeCourses()->latestCourses();
    }
    public function scopeFeaturedForStorefront($query){
        return $query->activeCourses()->featuredCourses();
    }
    public function scopeOffForStorefront($query){
        return $query->activeCourses()->offCourses();
    }
}
