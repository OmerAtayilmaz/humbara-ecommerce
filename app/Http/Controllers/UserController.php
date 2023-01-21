<?php

namespace App\Http\Controllers;

use App\Models\CourseOrder;
use App\Models\Favourites;
use App\Models\PurchasedCoursesByUser;
use App\Models\User;
use App\Services\Pricing;
use App\Strategies\ClearCartAfterPaymentSuccess;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function profile()
    {
        return view('storefront.user.profile');
    }

    public function coursecart(){
        return view('storefront.courses.cart');
    }

    public function coursecheckout()
    {
        $cartItems=Auth::user()->shoppingCartItem;
        $priceWithoutKDV=Pricing::getTotalPrices($cartItems);
        $totalPrice=Pricing::calcPriceWithKDV($priceWithoutKDV);
        return view('storefront.user.checkout',compact("totalPrice"));
    }

    public function getCreditCartRules():array{
        return [
            'card_number'=>"required",
            'cvc'=>"required",
            'month_year'=>"required",
        ];
    }

    public function course_checkout_payment(Request $req){

       //Form Validation
       //TODO: ADD MESSAGES
       $req->validate($this->getCreditCartRules());


        $form_card_number=$req->card_number;
        $form_month_year=$req->month_year;
        $form_cvc=$req->cvc;
        $monthYearArr=explode("/",$form_month_year);
        $form_month=$monthYearArr[0];
        $form_year=$monthYearArr[1];

        //Creating Options
        $opts = new \Iyzipay\Options();
        $opts->setApiKey(env("IYZICO_TEST_API_KEY"));
        $opts->setSecretKey(env("IYZICO_TEST_SECURITY_KEY"));
        $opts->setBaseUrl(env("IYZICO_TEST_BASE_URL"));


        //Creating Payment Request
        $paymentRequest = new \Iyzipay\Request\CreatePaymentRequest();
        $paymentRequest->setLocale(\Iyzipay\Model\Locale::TR);
        $paymentRequest->setConversationId($form_card_number);//başka bir şey de verilebilir.
        $cartItems=Auth::user()->shoppingCartItem;
        $priceWithoutKDV=Pricing::getTotalPrices($cartItems);
        $totalPrice=Pricing::calcPriceWithKDV($priceWithoutKDV);
        $paymentRequest->setPrice($totalPrice);
        $paymentRequest->setPaidPrice($totalPrice);//çekilecek olan kısım
        $paymentRequest->setCurrency(\Iyzipay\Model\Currency::TL); //para birimi
        $paymentRequest->setInstallment(1);//taksit
        $paymentRequest->setBasketId("MYBASKETID");
        $paymentRequest->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
        $paymentRequest->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);//Uyelik vs. ayarlanır.

        //Card Informations
        //Kart bilgileri girilir.
        $paymentCard = new \Iyzipay\Model\PaymentCard();
        $paymentCard->setCardHolderName(Auth::user()->name);
        $paymentCard->setCardNumber($form_card_number);
        $paymentCard->setExpireMonth($form_month);
        $paymentCard->setExpireYear($form_year);
        $paymentCard->setCvc($form_cvc);
        $paymentCard->setRegisterCard(0); //kartı kaydedip kaydetme durumu
        $paymentRequest->setPaymentCard($paymentCard);

        //Satın alan kişi - BUYER
        $buyer = new \Iyzipay\Model\Buyer();
        $buyer->setId(auth()->user()->id);
        $buyer->setName(Auth::user()->name);
        $buyer->setSurname(Auth::user()->surname);
        $buyer->setGsmNumber("UNDEFINED");
        $buyer->setEmail(auth()->user()->email);
        $buyer->setIdentityNumber("UNDEFINED");
        $buyer->setLastLoginDate("2015-10-05 12:43:35");
        $buyer->setRegistrationDate("2013-04-21 15:12:09");
        $buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $buyer->setIp(request()->ip());
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $paymentRequest->setBuyer($buyer);


        //Invoice/Billing Address
        $billingAddress=new \Iyzipay\Model\Address();
        $billingAddress->setContactName(Auth::user()->name);
        $billingAddress->setCity("ADD_CITY");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("KARABUK 90123 STREET NO:3");
        $billingAddress->setZipCode("24512");
        $paymentRequest->setBillingAddress($billingAddress);




        //Kargo adresi
        $shippingAddress = new \Iyzipay\Model\Address();
        $shippingAddress->setContactName("Jane Doe");
        $shippingAddress->setCity("Istanbul");
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $shippingAddress->setZipCode("34742");
        $paymentRequest->setShippingAddress($shippingAddress);



        $order=new CourseOrder();
        $order->user_id=Auth::user()->id;


        //Sepet Ürünleri - basket items
        $basketItems = array();
        $firstBasketItem = new \Iyzipay\Model\BasketItem();
        $firstBasketItem->setId("BI101");
        $firstBasketItem->setName("Binocular");
        $firstBasketItem->setCategory1("Collectibles");
        $firstBasketItem->setCategory2("Accessories");
        $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
        $firstBasketItem->setPrice($totalPrice);
        $basketItems[0] = $firstBasketItem;
        $paymentRequest->setBasketItems($basketItems);

        $purchasedCourses=Auth::user()->shoppingCartItem;
        $payment = \Iyzipay\Model\Payment::create($paymentRequest, $opts);
        if($payment->getStatus()=="success"){
           foreach ($purchasedCourses as $course){
               $purchasedCourse=new PurchasedCoursesByUser();
               $purchasedCourse->uuid=Str::uuid()->toString();
               $purchasedCourse->user_id=auth()->user()->id;
               $purchasedCourse->course_id=$course->id;
               $purchasedCourse->save();
           }
           ClearCartAfterPaymentSuccess::ClearUserCart(auth()->user()->getAuthIdentifier());
           return redirect()->route("user.checkoutsuccess");
        }else{
            dd($payment->getErrorMessage());
            dd($payment->getStatus());
        }
    }
    public function checkoutsuccess(){
        return view('storefront.user.checkout-success');
    }
    public function checkoutfail(){
        return view('storefront.user.checkout-fail');
    }
    public function courses(){
        $purchasedCourses=PurchasedCoursesByUser::with(["user","course"])->get();
        $favouritedCourses=Favourites::with(["user","course"])->ActiveCourses()->get();
        $archivedCourses=null;
        return view('storefront.user.courses',compact('purchasedCourses','favouritedCourses'));
    }
    public function logout(Request $request){
        if(!Auth::user())
            return redirect()->route('home');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }


}
