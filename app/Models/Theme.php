<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_color',
        'secondary_color',
        'dark_color',
        'light_color',
        'text_color',
        'title_font',
        'text_font',
        'status',
        'updated_by'
    ];

    public $protected=['id'];

}
