<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseCatalog extends Model
{
    use HasFactory;

    public function course(){
        return $this->hasOne(Course::class,"id","course_id")->select(["title","id"]);
    }

    public function scopeActiveCourses($query){
        return $query->where('status','active');
    }


}
