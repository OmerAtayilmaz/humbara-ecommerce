<?php
namespace App\Strategies;

use App\Models\CourseCart;
use App\Models\OnlineCourseCatalog;
use App\Models\PurchasedCoursesByUser;
use App\Utils\enums\CourseOwnershipStatus;
use Illuminate\Support\Facades\Auth;

class StoreFrontBasicStrategies
{

    public static function isCourseInCartOrPurchasedByUser($courseId) : ?CourseOwnershipStatus
    {
        $cartItems = CourseCart::where('user_id',Auth::id())->where('course_id',$courseId)->pluck("id");
        if (count($cartItems) > 0)
            return CourseOwnershipStatus::IN_CART;
        $onlineCourseIds = PurchasedCoursesByUser::where("course_id",$courseId)->where("user_id",Auth::id())->pluck("uuid");
        if($onlineCourseIds)
            return  CourseOwnershipStatus::PURCHASED;
        return null;
    }

}
