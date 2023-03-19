<?php
namespace App\Strategies;

use App\Models\CoursePrice;

class PricingStrategies{
    public static function getCoursePriceByCourse(CoursePrice $pricing){
        return match ($pricing["type"]) {
            "OFF" => $pricing["cheap_price"],
            "CAMPAINS" => $pricing["campains_price"],
            default => $pricing["expensive_price"],
        };
    }
}
