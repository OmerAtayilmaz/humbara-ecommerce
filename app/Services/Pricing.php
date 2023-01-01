<?php
namespace App\Services;

use App\Models\CoursePrice;
use App\Models\CourseCart;
use App\Http\Controllers\Home\HomeController;
class Pricing
{
   public static function getPrice(CoursePrice $pricing){
       switch ($pricing["type"]){
           case "OFF":
               return $pricing["cheap_price"];
           case "CAMPAINS":
               return $pricing["campains_price"];
           default:
               return $pricing["expensive_price"];
       }
   }
    public static function getTotalPrices($courseCart){

        $totalPrice=0;
        foreach ($courseCart as $course){
            $totalPrice +=(double)HomeController::printCoursePrice($course->course->course_price);
        }
        return $totalPrice;
    }

    public static function calcPriceWithKDV($price){
       return ($price+$price*(env("COURSE_KDV")/100));
    }

}
