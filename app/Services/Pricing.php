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
            $totalPrice +=(double)Pricing::printCoursePrice($course->course->course_price);
        }
        return $totalPrice;
    }
    public static function calcPriceWithKDV($price){
       return ($price+$price*(env("COURSE_KDV")/100));
    }
    public static function printCoursePrice($pricing){
        $price="";
        switch ($pricing->type){
            case "OFF":
                $price=$pricing->cheap_price;
                break;
            case "NORMAL":
                $price=$pricing->expensive_price;
                break;
            case "CAMPAINS":
                $price=$pricing->campains_price;
                break;
        }
        return $price;
    }
    public static function printCoursePriceName($pricing) : string{
        if ($pricing["type"] == "OFF")
           return $pricing->cheap_pr_title;
        if ($pricing["type"] == "CAMPAINS")
           return $pricing->campains;
        if ($pricing["type"] == "NORMAL")
           return $pricing->expensive_pr_title;
        return $pricing->expensive_pr_title;
    }
}
