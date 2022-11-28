<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(CourseCategory::class,'category_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'course_owner','id');
    }

    public function pricing(){
        return $this->hasMany(CoursePrice::class,'course_id','id');
    }

    public function off_courses(){
        $this->hasMany(CoursePrice::class,'course_id','id')->whereHas('pricing',(function($query){
            $query->where('type','OFF');
        }));
    }
}
