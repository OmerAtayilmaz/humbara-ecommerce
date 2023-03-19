@extends('layouts.storefront')
@section("title","Page Title")
@section('content')
<section class="section-padding">
    <div class="container">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
      >
        <i
          class="fa-solid fa-circle-exclamation text-danger"
          style="font-size: 4rem"
        ></i>
        <h3 class="fw-bold mt-4">Payment Failed</h3>
        <p>Your payment was failed. Please try again.</p>

        <button
          class="btn bg-primarycolor text-white mt-4"
          style="background-color: var(--primary-color)"
        >
          <i class="fa-solid fa-arrow-left"></i> Go Home
        </button>
      </div>
    </div>
  </section>
@endsection