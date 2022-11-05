<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $table='home_sliders';
    protected $fillable=['user_id','title','subtitle','priority','image','status','button_text','button_link','creator_device_ip'];

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
}
