@extends('layouts.storefront')
@section("title","Page Title")
@section('content')
<section class="section-padding">
    <div class="container ">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
      >
        <i
          class="fa-solid fa-circle-check text-success"
          style="font-size: 4rem"
        ></i>
        <h3 class="fw-bold mt-4">Payment Successful</h3>
        <p>Your payment was succesful. Thank you for your purchase!</p>

        <small class="color-gray text-uppercase fw-bold mt-4"
          >Continue with</small
        >

        <div
          class="row my-5 align-items-center border p-2 rounded-3" 
        >
          <div class="col-md-2 col-lg-2 col-xl-2 px-0">
            <img
              src="assets/images/card_img.png"
              class="img-fluid rounded-3 w-100"
              alt=""
            />
          </div>
          <div class="col-md-6 col-lg-6 col-xl-5 flex-grow-1 my-3">
            <h6 class="text-muted">Course</h6>
            <h6 class="text-black mb-0">Course Title</h6>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-5">
            <button
              class="btn bg-primarycolor text-white mx-auto w-100 py-2"
              style="background-color: var(--primary-color)"
            >
              Start Course
            </button>
          </div>
        </div>

        <small class="color-gray text-uppercase fw-bold mb-4">Or</small>

        <button
          class="btn bg-primarycolor text-white"
          style="background-color: var(--primary-color)"
        >
          <i class="fa-solid fa-arrow-left"></i> Go Home
        </button>
      </div>
    </div>
  </section>
@endsection