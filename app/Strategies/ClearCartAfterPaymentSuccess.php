<?php
namespace App\Strategies;

use App\Models\CourseCart;
use App\Models\CoursePrice;
use App\Services\Pricing;
use Illuminate\Support\Facades\Auth;

class ClearCartAfterPaymentSuccess
{

    public static function ClearUserCart($id):bool{
        $cartItems=CourseCart::where('user_id',$id)->delete();
        return $cartItems>0;
    }

}
