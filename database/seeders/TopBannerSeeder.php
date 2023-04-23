<?php

namespace Database\Seeders;

use App\Models\TopBanner;
use Illuminate\Database\Seeder;

class TopBannerSeeder extends Seeder{

    public function run(){

        TopBanner::created([
            'title_en' => "OFF",
            "title_tr" => "İNDİRİM!",
            "text_en" => "40% For All Courses!",
            "text_tr" => "Bütün Kurslarda %50 İndirim!",
            "status" => 'ACTIVE'
        ]);
    }
}
