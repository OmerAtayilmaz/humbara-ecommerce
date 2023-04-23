<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder {
    public function run(){
        Course::create([
            'title' => "Mock - Unreal Engine 3D Modelleme Kursu",
            'lang' => "TR",
            'description' => "It is a long established fact that a reader will be distracted by the readable content. It is a long established fact that a reader will be distracted by the readable content",
            'keywords' => "Unreal Engine 3D Modelleme KursuUnreal Engine 3D Modelleme KursuUnreal Engine 3D Modelleme KursuUnreal Engine 3D Modelleme KursuUnreal Engine 3D Modelleme Kursu",
            'slug' => 'unreal-engine-3d-modelleme-kursu',
            'content' => "Example Content",
            "card_image" => "http://placehold.it/512x512",
            'video_url' => "example_video_url",
            "category_id" => 1,
            "status" => "ACTIVE",
            "course_owner" => 1
        ]);

    }
}
