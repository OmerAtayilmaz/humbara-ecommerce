<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourites extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class)->select(["id","title"]);
    }
    public function user(){
        return $this->belongsTo(User::class)->select(["id","name"]);
    }

    public function scopeActiveCourses($query){
        return $query->where('status','ACTIVE');
    }
}
