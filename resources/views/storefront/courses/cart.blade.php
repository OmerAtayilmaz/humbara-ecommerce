@extends('layouts.storefront')
@section("title","Page Title")
@section('content')

<section class="section-padding">
 <div class="container-fluid p-5 ">
   <div class="row">
     <div class="col-lg-8">
       <div class="">
         <div
           class="d-flex justify-content-between align-items-center mb-5"
         >
           <h3 class="fw-bold mb-0 text-black">Shopping Cart</h3>
           <h6 class="mb-0 text-muted">{{count($cartCourses)}} items</h6>
         </div>
         <hr class="my-4" />
        @foreach($cartCourses as $c)
         <div
           class="row g-3 mb-4 d-flex justify-content-md-between justify-content-center align-items-center m-0"
         >
           <div class="col-12 col-md-2 col-lg-2 col-xl-2">
             <img
               src="{{asset('assets/home')}}/assets/images/card_img.png"
               class="img-fluid rounded-3 w-100"
               alt=""
             />
           </div>
           <div
             class="col-12 col-md-7 col-lg-7 col-xl-7 flex-grow-1 text-md-start text-center"
           >
             <h6 class="text-black fw-bold">{{$c->course->title}}</h6>
             <h6 class="text-muted">{{$c->course->user->name}}</h6>
             <div class="stars me-sm-3 me-0 mb-sm-0 mb-3">
               <i class="fa-solid fa-star color-star"></i>
               <span>4.0 (21 reviews)</span>
             </div>
           </div>
           <div class="col-12 col-md-2 col-lg-2 col-xl-2">
             <h5 class="mb-0 fw-bold text-center">₺{{App\Services\Pricing::printCoursePrice($c->course->course_price)}}</h5>
           </div>
           <div class="col-12 col-md-1 col-lg-1 col-xl-1 text-md-end text-center">
               <form action="{{route('course.add.cart.post',['slug'=>$c->course->slug,'id'=>$c->id])}}" method="POST">
                 @csrf
                 <button class="text-danger btn-cart-remove"><i class="fas fa-times fs-4"></i></button>
               </form>
           </div>
         </div>
         <hr class="my-4" />
        @endforeach

         <div class="pt-3">
           <h6 class="mb-0">
             <a href="#!" class="text-body"
               ><i class="fas fa-long-arrow-alt-left me-2"></i>Back to
               shop</a
             >
           </h6>
         </div>
       </div>
     </div>
     <div class="col-lg-4">
       <h3 class="fw-bold mb-5 mt-2 mt-md-0 pt-1">Summary</h3>
       <hr class="my-4" />

       <div class="d-flex justify-content-between mb-4">
         <h6 class="text-uppercase fw-bold">items {{count($cartCourses)}}</h6>
           <h6>€{{App\Services\Pricing::getTotalPrices($cartCourses)}}</h6>
       </div>

       <hr class="my-4" />

       <div class="d-flex justify-content-between">
         <h6 class="text-uppercase fw-bold">Total price</h6>
         <h6>€{{App\Services\Pricing::getTotalPrices($cartCourses)}}</h6>
       </div>

       <div class="d-flex justify-content-between">
         <h6 class="text-uppercase fw-bold">Price with tax</h6>
         <h6>€ {{App\Services\Pricing::calcPriceWithKDV(App\Services\Pricing::getTotalPrices($cartCourses))}}</h6>
       </div>
       <hr class="my-4" />

       <h6 class="text-uppercase mb-3 fw-bold">Give code</h6>

       <div class="mb-5">
         <div class="form-outline">
           <input
             type="text"
             id="form3Examplea2"
             class="form-control form-control mb-2"
             placeholder="Enter your code"
           />
           <label
             ><span class="color-gray fw-bold"
               ><a
                 href="#"
                 class="form-label text-decoration-none color-gray"
                 ><i class="fa-solid fa-xmark"></i
               ></a>
               ASDW</span
             >
             kodu uygulandı.</label
           >
         </div>
         <a
           href="{{route('user.course.checkout')}}"
           class="btn bg-primarycolor text-white mt-3"
           style="background-color: var(--primary-color)"
         >
           Checkout
        </a>
       </div>
     </div>
   </div>
 </div>
</section>

<section class="mb-5">
 <div class="container">
   <div
     class="w-100 mb-4 d-flex align-items-center justify-content-between"
   >
     <h2 class="color-primary">Similar Products</h2>
     <a href="#" class="color-primary text-decoration-none"
       >Hepsini Göster <i class="fa-solid fa-arrow-right-long"></i
     ></a>
   </div>
   <div class="row" style="--bs-gutter-y: 1rem">
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
       <div class="newproduct-card">
         <a href="productdetail.html" class="newproduct-card--link">
           <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
           <div
             class="newproduct--off"
             style="
               background-color: var(--hovered-primary-color);
               color: white;
             "
           >
             <span>25% OFF</span>
           </div>
           <div class="newproduct--content">
             <div class="container d-flex flex-column mt-3">
               <small class="color-gray">Category</small>
               <span
                 class="color-primary text-decoration-none newproduct--title"
                 >Full 3D Design Design Design Design Design Course</span
               >
               <div class="creator">
                 <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                 <span class="color-gray">by John Doe</span>
               </div>
             </div>
             <hr />
             <div class="container mb-3">
               <div
                 class="d-flex justify-content-between align-items-center"
               >
                 <div class="stars">
                   <i class="fa-solid fa-star color-star"></i>
                   <span>4.7</span> <small>(174)</small>
                 </div>
                 <div class="newproduct-price">
                   <span>₺125.99</span>
                 </div>
               </div>
             </div>
           </div>
         </a>
       </div>
     </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
       <div class="newproduct-card">
         <a href="productdetail.html" class="newproduct-card--link">
           <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
           <div
             class="newproduct--off"
             style="
               background-color: var(--hovered-primary-color);
               color: white;
             "
           >
             <span>25% OFF</span>
           </div>
           <div class="newproduct--content">
             <div class="container d-flex flex-column mt-3">
               <small class="color-gray">Category</small>
               <span
                 class="color-primary text-decoration-none newproduct--title"
                 >Full 3D Design Design Design Design Design Course</span
               >
               <div class="creator">
                 <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                 <span class="color-gray">by John Doe</span>
               </div>
             </div>
             <hr />
             <div class="container mb-3">
               <div
                 class="d-flex justify-content-between align-items-center"
               >
                 <div class="stars">
                   <i class="fa-solid fa-star color-star"></i>
                   <span>4.7</span> <small>(174)</small>
                 </div>
                 <div class="newproduct-price">
                   <span>₺125.99</span>
                 </div>
               </div>
             </div>
           </div>
         </a>
       </div>
     </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
       <div class="newproduct-card">
         <a href="productdetail.html" class="newproduct-card--link">
           <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
           <div
             class="newproduct--off"
             style="
               background-color: var(--hovered-primary-color);
               color: white;
             "
           >
             <span>25% OFF</span>
           </div>
           <div class="newproduct--content">
             <div class="container d-flex flex-column mt-3">
               <small class="color-gray">Category</small>
               <span
                 class="color-primary text-decoration-none newproduct--title"
                 >Full 3D Design Design Design Design Design Course</span
               >
               <div class="creator">
                 <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                 <span class="color-gray">by John Doe</span>
               </div>
             </div>
             <hr />
             <div class="container mb-3">
               <div
                 class="d-flex justify-content-between align-items-center"
               >
                 <div class="stars">
                   <i class="fa-solid fa-star color-star"></i>
                   <span>4.7</span> <small>(174)</small>
                 </div>
                 <div class="newproduct-price">
                   <span>₺125.99</span>
                 </div>
               </div>
             </div>
           </div>
         </a>
       </div>
     </div>
     <div class="col-12 col-sm-6 col-md-4 col-lg-3">
       <div class="newproduct-card">
         <a href="productdetail.html" class="newproduct-card--link">
           <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
           <div
             class="newproduct--off"
             style="
               background-color: var(--hovered-primary-color);
               color: white;
             "
           >
             <span>25% OFF</span>
           </div>
           <div class="newproduct--content">
             <div class="container d-flex flex-column mt-3">
               <small class="color-gray">Category</small>
               <span
                 class="color-primary text-decoration-none newproduct--title"
                 >Full 3D Design Design Design Design Design Course</span
               >
               <div class="creator">
                 <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                 <span class="color-gray">by John Doe</span>
               </div>
             </div>
             <hr />
             <div class="container mb-3">
               <div
                 class="d-flex justify-content-between align-items-center"
               >
                 <div class="stars">
                   <i class="fa-solid fa-star color-star"></i>
                   <span>4.7</span> <small>(174)</small>
                 </div>
                 <div class="newproduct-price">
                   <span>₺125.99</span>
                 </div>
               </div>
             </div>
           </div>
         </a>
       </div>
     </div>
   </div>
 </div>
</section>
@endsection
