@extends('layouts.storefront')
@section("title","Search List Page")
@section('content')

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
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form id="filter-form">
                                @csrf
                                <div class="mb-4">
                                    <div>
                                        <label class="form-label fw-bold" for="amount">Price range:</label><br/>
                                        <label>Min: <input class="form-input" type="number" name="min_price"></label>
                                        <label>Max: <input class="form-input" type="number" name="max_price"></label>
                                    </div>
                                    <div id="slider-range" class="mt-2"></div>
                                </div>
{{--                                <div class="mb-4">--}}
{{--                                    <label class="form-label fw-bold">License</label>--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />--}}
{{--                                        <label class="form-check-label" for="flexRadioDefault1">--}}
{{--                                            Commercial Use--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"--}}
{{--                                               checked />--}}
{{--                                        <label class="form-check-label" for="flexRadioDefault2">--}}
{{--                                            Personal Use--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
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
                                        <input class="form-check-input" type="checkbox" value="1" name="category1" id="category1" />
                                        <label class="form-check-label" for="category1">
                                            3D Assets
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="2"  name="category2" id="category2" />
                                        <label class="form-check-label" for="category2">
                                            Low Poly
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="3" id="category3" name="category3" />
                                        <label class="form-check-label" for="category3">
                                            Game Ready
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="4" id="category4" name="category4" />
                                        <label class="form-check-label" for="category4">
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
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="row" style="--bs-gutter-y: 1rem">
                        @if(count($courseList)>0)
                            @foreach($courseList as $course)
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="newproduct-card">
                                        <a href="{{route("course.detail",["slug"=>$course->slug,"id"=>$course->id])}}" class="newproduct-card--link">
                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                            <div class="newproduct--off">
                                                <span>25% OFF</span>
                                            </div>
                                            <div class="newproduct--content">
                                                <div class="container d-flex flex-column mt-3">
                                                    <small class="color-gray">Category</small>
                                                    <span class="color-primary text-decoration-none newproduct--title">{{$course->title}}</span>
                                                    <div class="creator">
                                                        @if($course->user->profile_photo_path==null)
                                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                                        @else
                                                            <img src="{{Storage::url($course->user->profile_photo_path)}}" alt="{{$course->user->name}} {{$course->user->surname}}" />
                                                        @endif
                                                        <span class="color-gray">by {{$course->user->name}} {{$course->user->surname}}</span>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="container mb-3">
                                                    <div class="d-flex justify-content-between align-items-center">
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
                        @endif
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="newproduct-card">
                                <a href="productdetail.html" class="newproduct-card--link">
                                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                    <div class="newproduct--off">
                                        <span>25% OFF</span>
                                    </div>
                                    <div class="newproduct--content">
                                        <div class="container d-flex flex-column mt-3">
                                            <small class="color-gray">Category</small>
                                            <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design
                        Design Design Course</span>
                                            <div class="creator">
                                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                                <span class="color-gray">by John Doe</span>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="container mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
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
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="newproduct-card">
                                <a href="productdetail.html" class="newproduct-card--link">
                                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                    <div class="newproduct--off">
                                        <span>25% OFF</span>
                                    </div>
                                    <div class="newproduct--content">
                                        <div class="container d-flex flex-column mt-3">
                                            <small class="color-gray">Category</small>
                                            <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design
                        Design Design Course</span>
                                            <div class="creator">
                                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                                                <span class="color-gray">by John Doe</span>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="container mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
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
    <div id="product-list"></div>
    @section("bottom-js")
        <script>
            $(document).ready(function(){
              $("#filter-form").submit(function(e){
                  e.preventDefault();
                  var formData=$(this).serialize();
                  $.ajax({
                      url:"{{route('facetmanagement')}}",
                      method:"POST",
                      data:formData,
                      success:function(data){
                          $("#product-list").html(data);
                          console.log(data);
                      },
                      error:function(err){
                          console.log(err);
                      }
                  })
              })
            });
        </script>
    @endsection
@endsection
