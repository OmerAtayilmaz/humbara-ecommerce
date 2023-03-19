<?php
namespace App\Strategies;

use App\Models\CourseCart;
use App\Models\OnlineCourseCatalog;
use App\Models\PurchasedCoursesByUser;
use App\Utils\Enums\CourseOwnershipStatus;
use Illuminate\Support\Facades\Auth;

class StoreFrontBasicStrategies
{

    public static function isCourseInCartOrPurchasedByUser($courseId) : ?CourseOwnershipStatus
    {
        $cartItems = CourseCart::where('user_id',Auth::id())->where('course_id',$courseId)->pluck("id")->toArray();
        if (!empty($cartItems))
            return CourseOwnershipStatus::IN_CART;
        $onlineCourseIds = PurchasedCoursesByUser::where("course_id",$courseId)->where("user_id",Auth::id())->pluck("uuid")->toArray();
        if(!empty($onlineCourseIds))
            return  CourseOwnershipStatus::PURCHASED;
        return null;
    }

}
