@extends('layouts.storefront')
@section("title","Humbara Games | Latest Courses")
@section('content')
<header style="height: 80vh">
    <div class="w-100 h-100 section-gradient">
      <div class="container h-100">
        <div class="row h-100">
          <div class="h-100 col-12 col-sm-6 d-flex flex-column align-items-start justify-content-center">
            <small class="color-primary">FOR EVERYONE</small>
            <h1 class="text-white fw-bold mt-3">Latest Courses</h1>
            <p class="color-gray mt-3 mb-4">Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Morbi
              mattis ullamcorper velit.</p>
            <button class="btn bg-primarycolor text-white py-2" style="background-color: var(--primary-color);">Explore
              Now</button>
          </div>
          <div class="col-12 col-sm-6 d-none d-sm-flex">
            <img class="w-100"
              src="https://zone-assets-api.vercel.app/assets/illustrations/illustration_courses_hero.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="bg-secondarycolor py-4">
    <div class="container">
      <div class="row" style="--bs-gutter-y: 1rem">
        <div class="col-12 col-sm-6 d-flex align-items-center justify-content-sm-start justify-content-center fs-4">
          <i class="fa-solid fa-bullhorn"></i>
          <h4 class="text-white mb-0 ms-3"><span class="color-primary fst-italic">25%</span> discount for this special
            day.</h4>
        </div>
        <div class="col-12 col-sm-6 d-flex">
          <div class="w-100 d-flex align-items-center justify-content-sm-end justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-start text-white">
              <span class="specialcount-days fs-3 fw-bold fst-italic">12</span>
              <small>days</small>
            </div>
            <div class="mx-3 fs-3 fw-bold text-white">:</div>
            <div class="d-flex flex-column align-items-center justify-content-start text-white">
              <span class="specialcount-hours fs-3 fw-bold fst-italic">3</span>
              <small>hours</small>
            </div>
            <div class="mx-3 fs-3 fw-bold text-white">:</div>
            <div class="d-flex flex-column align-items-center justify-content-start text-white">
              <span class="specialcount-minutes fs-3 fw-bold fst-italic">55</span>
              <small>minutes</small>
            </div>
            <div class="mx-3 fs-3 fw-bold text-white">:</div>
            <div class="d-flex flex-column align-items-center justify-content-start text-white">
              <span class="specialcount-seconds fs-3 fw-bold fst-italic">22</span>
              <small>seconds</small>
            </div>
            <div class="specialcount-expired"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <div
        class="d-flex align-items-sm-center align-items-start flex-column flex-sm-row justify-content-lg-end justify-content-center">
        <button class="btn bg-primarycolor d-lg-none text-white me-sm-3 me-0 mb-sm-0 mb-3"
          style="background-color: var(--primary-color) !important" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
          Filter
        </button>
        <div class="d-flex align-items-center flex-column flex-sm-row justify-content-center">
          <select class="form-select me-sm-3 me-0 mb-sm-0 mb-3" aria-label="Per Page Select">
            <option selected>Per page</option>
            <option value="10">10</option>
            <option value="20">25</option>
            <option value="50">50</option>
          </select>
          <select class="form-select" aria-label="Sort by Select">
            <option selected>Sort by</option>
            <option value="most-popular">Most popular</option>
            <option value="newest-products">Newest products</option>
          </select>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-lg-3">
          <div class="offcanvas-lg offcanvas-end" tabindex="-1" id="offcanvasResponsive"
            aria-labelledby="offcanvasResponsiveLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <form>
                <div class="mb-4">
                  <div>
                    <label class="form-label fw-bold" for="amount">Price range:
                    </label>
                    <input type="text" id="amount" readonly style="
                          border: 0;
                          color: var(--primary-color);
                          font-weight: bold;
                        " />
                  </div>
                  <div id="slider-range" class="mt-2"></div>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">License</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                    <label class="form-check-label" for="flexRadioDefault1">
                      Commercial Use
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                      checked />
                    <label class="form-check-label" for="flexRadioDefault2">
                      Personal Use
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <label for="reviewRate" class="form-label fw-bold">Rating</label>
                  <div class="rate mb-3" id="reviewRate">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">Software</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      Cinema 4D
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      ZBrush
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      3DS Max
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      Maya
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">Categories</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      3D Assets
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      Low Poly
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      Game Ready
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      Other
                    </label>
                  </div>
                </div>
                <div class="mb-4">
                  <label class="form-label fw-bold">Tags</label>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      City
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      Building
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      Map
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                    <label class="form-check-label" for="flexCheckChecked">
                      Landscape
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-9">
          <div class="row" style="--bs-gutter-y: 1rem">
              @foreach($courses as $item)
                  <div class="col-12 col-sm-6 col-lg-4">
                      <div class="newproduct-card">
                          <a href="{{route("course.detail",["slug"=>$item->course->slug,"id"=>$item->course->id])}}" class="newproduct-card--link">
                              <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                              <div class="newproduct--off">
                                  <span>{{App\Services\Pricing::printCoursePriceName($item->course->course_price)}}</span>
                              </div>
                              <div class="newproduct--content">
                                  <div class="container d-flex flex-column mt-3">
                                      <small class="color-gray">Category</small>
                                      <span
                                          class="color-primary text-decoration-none newproduct--title"
                                      >{{$item->course->title}}</span
                                      >
                                      <div class="creator">
                                          <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                          <span class="color-gray">BySomeOne</span>
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
              @endforeach
          </div>
          <div class="w-100 d-flex align-items-center justify-content-center mt-5">
            <button class="btn bg-primarycolor text-white" style="background-color: var(--primary-color)">
              Load More
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter -->
  <div class="newsletter">
    <div class="container d-flex justify-content-end">
      <div class="col-12 col-sm-6 ms-auto">
        <div class="w-100 px-sm-5 px-3">
          <h2 class="fw-bold mb-3">Newsletter</h2>
          <p class="fw-light">
            Sign up now to receive hot special offers and information about
            the best courses!
          </p>
          <form class="mt-5">
            <div class="form-group position-relative">
              <input type="email" class="form-control py-3" placeholder="Enter Your Email" />
              <button
                class="btn bg-primarycolor text-white py-3 px-4 position-absolute top-50 end-0 translate-middle-y text-dark"
                style="background-color: var(--primary-color);">
                <i class="fa-solid fa-chevron-right"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
