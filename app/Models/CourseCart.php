<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCart extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function course(){
        return $this->hasOne(Course::class,"id","course_id");
    }
}
