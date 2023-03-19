<?php

namespace App\Services;
use App\Models\Order;
use App\Models\OrderItems;
use App\Utils\Enums\OrderStatus;
use App\Utils\Enums\PaymentMethod;
use Illuminate\Support\Str;
use Auth;
use App\Strategies\PricingStrategies;
class OrderManagementService {

      //create an order
    public function createOrder( $totalAmount ): string{
        $order = new Order();
        $order->customer_id = Auth::user()->id;
        $order->order_id = Str::random(10) . uniqid();
        $order->order_date = now();
        $order->order_status = OrderStatus::PENDING;
        $order->total_amount = $totalAmount;
        $order->payment_method = PaymentMethod::CREDIT_CARD;
        $order->save();
        return $order->order_id;
    }

      //add cart items to order items table
    public function fillCartItemsToOrderItems($orderId, $cartItems = []){

        foreach ($cartItems as $item){
            $cart = new OrderItems();
            $cart->order_id = $orderId;
            $cart->course_id = $item->course_id;
            $cart->user_id = $item->user_id;
            $cart->course_name = $item->course->title;
            $cart->total_price = PricingStrategies::getCoursePriceByCourse($item->course->course_price);
            $cart->save();
        }
    }

      //calculate total amount by cart
     public function calcTotalOrderAmountByCart($cartItems = []){

     }

}
