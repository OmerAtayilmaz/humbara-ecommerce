<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //Mass assignment
    protected $fillable = [
        'c_name',
        'c_keywords',
        'c_description',
        'c_logo',
        'c_favicon',
        'c_email',
        'c_phone',
        'c_address',
        'c_facebook',
        'c_twitter',
        'c_instagram',
        'c_youtube',
        'c_linkedin',
        'contact',
        'references',
        'about_us',
        'status',
    ];
    //erişilemez
    protected $guarded = ['id'];

    use HasFactory;
}
