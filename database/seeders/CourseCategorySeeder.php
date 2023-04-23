<?php

namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseCategorySeeder extends Seeder{
    public function run(){
        CourseCategory::create([
            'parent_id' => 1,
            "creator_id" => 1,
            "type" => "CATEGORY",
            'title_en' => "ZBrush Courses EN",
            'title_tr' => "ZBrush Courses TR",
            'keywords_en' => "EN KEYWORSD",
            'keywords_tr' => "TR KEYWORDS",
            'content_tr' => "ZBrush Content TR",
            'content_en' => "ZBrush Content EN",
            'slug_en' => "z-brush-slug-en",
            'slug_tr' => "z-brush-slug-tr",
            'description_en' => "description en",
            'description_tr' => "description tr",
            "creator_ip" => "127.0.0.1",
            "image" => "placehold.it/512x512"
        ]);
    }
}
