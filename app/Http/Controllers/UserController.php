<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storefront\CheckoutPageCartFormRequest;
use App\Models\CourseOrder;
use App\Models\Favourites;
use App\Models\Order;
use App\Models\PurchasedCoursesByUser;
use App\Models\User;
use App\Services\OrderManagementService;
use App\Services\Pricing;
use App\Strategies\ClearCartAfterPaymentSuccess;
use App\WsDto\CheckoutCardDto;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\PaymentCard;
use Iyzipay\Model\PaymentChannel;
use Iyzipay\Model\PaymentGroup;
use Iyzipay\Options;
use Iyzipay\Request\CreatePaymentRequest;
use Iyzipay\Model\Address;
use \Iyzipay\Model\Locale;
use \Iyzipay\Model\Payment;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
class UserController extends Controller
{
    protected OrderManagementService $orderManagementService;

    public function __construct(OrderManagementService $orderManagementService){
        $this->orderManagementService = $orderManagementService;
    }

    public function profile(): Factory|View|Application
    {
        return view('storefront.user.profile');
    }

    public function coursecart(){
        return view('storefront.courses.cart');
    }

    public function coursecheckout(): Factory|View|Application
    {
        $cartItems=Auth::user()->shoppingCartItem;
        $priceWithoutKDV=Pricing::getTotalPrices($cartItems);
        $totalPrice=Pricing::calcPriceWithKDV($priceWithoutKDV);
        return view('storefront.user.checkout.payment',compact("totalPrice"));
    }


    public function course_checkout_payment(CheckoutPageCartFormRequest $req){

        $data = $req->only('card_number', 'month_year', 'cvc');
        $cardDto = new CheckoutCardDto($data['card_number'], $data['month_year'], $data['cvc']);

        //Cart Data
        $cartItems = Auth::user()->shoppingCartItem;
        $priceWithoutKDV=Pricing::getTotalPrices($cartItems);
        $totalPrice=Pricing::calcPriceWithKDV($priceWithoutKDV);

        //Creating order
         $orderId = $this->orderManagementService->createOrder($totalPrice);


        //Filling up cart into Order Items
        $this->orderManagementService->fillCartItemsToOrderItems($orderId, $cartItems);


        //Creating Options
        $opts = new Options();
        $opts->setApiKey(env("IYZICO_TEST_API_KEY"));
        $opts->setSecretKey(env("IYZICO_TEST_SECURITY_KEY"));
        $opts->setBaseUrl(env("IYZICO_TEST_BASE_URL"));

        dd("ILERME BASARILI");
        //Creating Payment Request
        $paymentRequest = new CreatePaymentRequest();
        $paymentRequest->setLocale(Locale::TR);
        $paymentRequest->setConversationId($cardDto->getCardNumber());//başka bir şey de verilebilir.
        $paymentRequest->setPrice($totalPrice);
        $paymentRequest->setPaidPrice($totalPrice);//çekilecek olan kısım
        $paymentRequest->setCurrency(\Iyzipay\Model\Currency::TL); //para birimi
        $paymentRequest->setInstallment(1);//taksit
        $paymentRequest->setBasketId($orderId);
        $paymentRequest->setPaymentChannel(PaymentChannel::WEB);
        $paymentRequest->setPaymentGroup(PaymentGroup::PRODUCT);//Uyelik vs. ayarlanır.

        //Card Informations
        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName(Auth::user()->name);
        $paymentCard->setCardNumber($cardDto->getCardNumber());
        $paymentCard->setExpireMonth($cardDto->getMonth());
        $paymentCard->setExpireYear($cardDto->getYear());
        $paymentCard->setCvc($cardDto->getCardCvc());
        $paymentCard->setRegisterCard(0); //kartı kaydedip kaydetme durumu
        $paymentRequest->setPaymentCard($paymentCard);

        //Satın alan kişi - BUYER
        $buyer = new Buyer();
        $buyer->setId(Auth::user()->id);
        $buyer->setName(Auth::user()->name);
        $buyer->setSurname(Auth::user()->surname);
        $buyer->setGsmNumber("UNDEFINED");
        $buyer->setEmail(auth()->user()->email);
        $buyer->setIdentityNumber("UNDEFINED");
        $buyer->setLastLoginDate(now());
        $buyer->setRegistrationDate(Auth::user()->created_at);
        $buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $buyer->setIp(request()->ip());
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $paymentRequest->setBuyer($buyer);


        //Invoice/Billing Address
        $billingAddress=new Address();
        $billingAddress->setContactName(Auth::user()->name);
        $billingAddress->setCity("ADD_CITY");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("KARABUK 90123 STREET NO:3");
        $billingAddress->setZipCode("24512");
        $paymentRequest->setBillingAddress($billingAddress);


        //Shipping Adress
        $shippingAddress = new Address();
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
        $firstBasketItem->setItemType(\Iyzipay\Model\BasketItemType::VIRTUAL);
        $firstBasketItem->setPrice($totalPrice);
        $basketItems[0] = $firstBasketItem;
        $paymentRequest->setBasketItems($basketItems);

        $purchasedCourses=Auth::user()->shoppingCartItem;
        $payment = Payment::create($paymentRequest, $opts);
        if($payment->getStatus()=="success"){
           foreach ($purchasedCourses as $course){
               $purchasedCourse = new PurchasedCoursesByUser();
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
    public function checkoutsuccess(): Factory|View|Application
    {
        return view('storefront.user.checkout.success');
    }
    public function checkoutfail(): Factory|View|Application
    {
        return view('storefront.user.checkout.fail');
    }
    public function courses(){
        $purchasedCourses=PurchasedCoursesByUser::with(["user","course"])->get();
        $favouritedCourses=Favourites::with(["user","course"])->ActiveCourses()->get();
        $archivedCourses=null;
        return view('storefront.user.courses',compact('purchasedCourses','favouritedCourses'));
    }
    public function logout(Request $request): RedirectResponse
    {
        if(!Auth::user())
            return redirect()->route('home');

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }


}
