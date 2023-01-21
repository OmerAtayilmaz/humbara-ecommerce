<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{

    use HasFactory;
    protected $fillable=['id','creator_id','creator_ip','title_en','title_tr','status','description_tr','description_en','keywords_tr','keywords_en','content_tr','content_en','image','parent_id','type','slug'];

    public function user(){
        return $this->belongsTo('App\Models\User','creator_id');
    }
    public function scopeActiveCategories($query){
        return $query->where('status','active');
    }
}
