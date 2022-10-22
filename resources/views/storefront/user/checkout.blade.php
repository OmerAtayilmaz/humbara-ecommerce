@extends('layouts.storefront')
@section("title","Page Title")
@section('content')

<section class="payment__section section-padding checkout">
    <div class="container">
      <div class="row g-3">
        <div class="col-md-7">
          <h3 class="fw-bold">Payment Method</h3>
          <div class="card">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="false"
                    aria-controls="collapseOne"
                  >
                    Paypal
                    <img
                      class="checkout__card--img ms-3"
                      src="{{asset('assets/home')}}/assets/icons/paypal-color.svg"
                    />
                  </button>
                </h2>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Paypal email"
                    />
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-expanded="true"
                    aria-controls="collapseTwo"
                  >
                    Credit Card
                    <div
                      class="d-flex align-items-center justify-content-center flex-wrap"
                    >
                      <img
                        class="checkout__card--img ms-2"
                        src="{{asset('assets/home')}}/assets/icons/card-discover.svg"
                      />
                      <img
                        class="checkout__card--img ms-2"
                        src="{{asset('assets/home')}}/assets/icons/card-mastercard.svg"
                      />
                      <img
                        class="checkout__card--img ms-2"
                        src="{{asset('assets/home')}}/assets/icons/card-visa.svg"
                      />
                    </div>
                  </button>
                </h2>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <span class="font-weight-normal card-text"
                      >Card Number</span
                    >
                    <div class="input">
                      <i class="fa fa-credit-card"></i>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="0000 0000 0000 0000"
                      />
                    </div>

                    <div class="row mt-3 mb-3">
                      <div class="col-md-6">
                        <span class="font-weight-normal card-text"
                          >Expiry Date</span
                        >
                        <div class="input">
                          <i class="fa fa-calendar"></i>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="MM/YY"
                          />
                        </div>
                      </div>

                      <div class="col-md-6">
                        <span class="font-weight-normal card-text"
                          >CVC/CVV</span
                        >
                        <div class="input">
                          <i class="fa fa-lock"></i>
                          <input
                            type="text"
                            class="form-control"
                            placeholder="000"
                          />
                        </div>
                      </div>
                    </div>

                    <span class="text-muted certificate-text"
                      ><i class="fa fa-lock"></i> Your transaction is secured
                      with ssl certificate</span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <h3 class="fw-bold">Summary</h3>

          <div class="card">
            <div class="d-flex justify-content-between p-3">
              <span class="fw-bold">Total Price</span>

              <div class="mt-1">
                <sup class="super-price">$9.99</sup>
              </div>
            </div>

            <hr class="mt-0 line" />

            <div class="p-3">
              <div class="d-flex justify-content-between mb-2">
                <span class="fw-bold">Refferal Bonouses</span>
                <span>-$2.00</span>
              </div>
            </div>

            <hr class="mt-0 line" />

            <div class="p-3 d-flex justify-content-between">
              <div class="d-flex flex-column">
                <span class="fw-bold">Proceed</span>
              </div>
              <span>$7</span>
            </div>

            <div class="p-3">
              <button
                class="btn bg-primarycolor text-white"
                style="background-color: var(--primary-color)"
              >
                Buy Now
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection