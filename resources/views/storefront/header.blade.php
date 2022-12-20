  <!-- Top Bar -->
  <nav class="navbar bg-primarycolor">
    <div class="container">
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div class="d-lg-flex d-none align-items-center justify-content-center m-0">
          <span class="color-dark fs-5">
            <i class="fa-solid fa-bullhorn"></i>
          </span>
          <p class="m-0 ms-2 text-white">{{$topBanner->text_tr}}</p>
        </div>
        <div class="flex-grow-1 m-0">
          <h5 class="text-white text-center m-0">
           {{$topBanner->title_tr}}
          </h5>
        </div>
        <div class="d-none d-lg-block">
          <a href="#productList" class="btn bg-lightcolor color-dark p-1" style="background-color: var(--light-color)">
            {{__("header.top_bar_btn")}}
          </a>
            <a href="{{route('language',Cookie::get('lang')=='en'?'tr':'en')}}" class="btn bg-lightcolor color-dark px-3 py-1" style="background-color: var(--light-color)">
                {{__("header.top_bar_lang")}}
            </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar -->
  <nav class="py-1 navbar navbar-expand-lg navbar-light bg-mutedcolor sticky-top d-flex flex-column">
    <div class="container-fluid">
      <button class="navbar-toggler" style="border-color: var(--primary-color)" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="fs-1 color-primary"><i class="fa-solid fa-bars"></i></span>
      </button>

      <a href="/" class="navbar-brand">
        <img src="{{asset('assets/home')}}/assets/icons/nav_logo.png" alt="Humbara games logo" />
      </a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close ms-2 mt-2" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav">
            <li class="nav-item navbar__dropdown d-none d-lg-block">
              <button class="nav-link navbar__dropdown--btn d-flex align-items-center p-1">
                {{__('header.navbar.courses')}} <i class="ms-2 fa-solid fa-angle-down"></i>
              </button>

              <div class="navbar__dropdown--content w-50">
                <div class="row w-100">
                  <div
                    class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-start bg-darkcolor p-2"
                    style="border-radius: 0.5rem 0 0 0.5rem">
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('allcourses')}}">All Courses</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('bestcourses')}}">Best Courses</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('latestcourses')}}">Latest</a>
                  </div>
                  <div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center p-2">
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Intro Courses</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Modeling</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Concept Art</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Character Creation</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Animation</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item navbar__dropdown d-none d-lg-block">
              <button class="nav-link navbar__dropdown--btn d-flex align-items-center p-1">
                  {{__('header.navbar.assets')}} <i class="ms-2 fa-solid fa-angle-down"></i>
              </button>

              <div class="navbar__dropdown--content w-50">
                <div class="row w-100">
                  <div
                    class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center bg-darkcolor p-2"
                    style="border-radius: 0.5rem 0 0 0.5rem">
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('allassets')}}">All Assets</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('bestassets')}}">Best Assets</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 text-white mb-2 text-decoration-none"
                      href="{{route('latestassets')}}">Latest</a>
                  </div>
                  <div class="col-12 col-md-6 d-flex flex-column align-items-start justify-content-center p-2">
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">3D Models</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Brushing</a>
                    <a class="navbar__dropdown--link p-2 d-block w-100 rounded-3 color-dark mb-2 text-decoration-none"
                      href="#">Game Assets</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown navbar__dropdown d-block d-lg-none mb-3">
              <a class="nav-link dropdown-toggle p-2 m-0" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                  {{__('header.navbar.assets')}}
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">All Assets</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Best Assets</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Latest</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">3D Models</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Brushes</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Game Assets</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown navbar__dropdown d-block d-lg-none mb-3">
              <a class="nav-link dropdown-toggle p-2 m-0" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Courses
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">All Courses</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Best Courses</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Latest</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Intro Courses</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Modeling</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Concept Art</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Character Creation</a>
                </li>
                <li>
                  <a class="dropdown-item navbar__dropdown--link" href="#">Animation</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown navbar__dropdown d-block d-lg-none mb-3">
              <a class="nav-link dropdown-toggle p-2 m-0 d-flex align-items-center" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user me-2"></i>
                Account
              </a>
              <ul class="dropdown-menu">
                @auth
                END AUTH
                @else
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.loginpanel')}}">Login</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.registerpanel')}}">Signup</a>
                </li>
                @endauth
              </ul>
            </li>
            <li class="nav-item dropdown navbar__dropdown d-block d-lg-none mb-3">
              <a class="nav-link dropdown-toggle p-2 m-0 d-flex align-items-center" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-ellipsis-vertical me-2"></i>
                Other
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="creators-list.html">Instructors</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-category.html">Product List
                    Category</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-creator.html">Product List
                    Creator</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-special.html">Product List
                    Special</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-campaign.html">Product List
                    Campaign</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="payment-failed.html">Payment Failed</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="payment-successful.html">Payment Successful</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="cart.html">Cart</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="checkout.html">Checkout</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="about-us.html">About Us</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="cookie.html">Cookie</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="terms.html">Terms</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="privacy.html">Privacy</a>
                </li>
              </ul>
            </li>
          </ul>
         @include('storefront.search')
          <div class="d-flex align-items-center">
            <div class="dropdown my-courses me-2 d-none d-lg-block">
              <button
                class="btn dropdown-toggle text-white py-1"
                style="background-color: var(--primary-color) !important"
                type="button"
                id="dropdownMyCourses"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                My Courses
              </button>
              <ul
                class="dropdown-menu dropdown-menu-lg-end"
                aria-labelledby="dropdownMyCoursess"
              >
                <li>
                  <a
                    class="navbar__dropdown--link dropdown-item"
                    href="/"
                  >
                    <div class="course-content">
                      <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                      <div class="course-content--dec">
                        <p>Course Name</p>
                        <div class="progress">
                          <div
                            class="progress-bar"
                            role="progressbar"
                            aria-label="Example with label"
                            style="width: 25%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            25%
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="navbar__dropdown--link dropdown-item"
                    href="/"
                  >
                    <div class="course-content">
                      <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                      <div class="course-content--dec">
                        <p>Course Name</p>
                        <div class="progress">
                          <div
                            class="progress-bar"
                            role="progressbar"
                            aria-label="Example with label"
                            style="width: 25%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            25%
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a
                    class="navbar__dropdown--link dropdown-item"
                    href="/"
                  >
                    <div class="course-content">
                      <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                      <div class="course-content--dec">
                        <p>Course Name</p>
                        <div class="progress">
                          <div
                            class="progress-bar"
                            role="progressbar"
                            aria-label="Example with label"
                            style="width: 25%"
                            aria-valuenow="25"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          >
                            25%
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li id="go-to-my-course">
                  <div class="course-btn">
                    <a href="{{route('user.courses')}}">Kurslarıma Git</a>
                  </div>
                </li>
              </ul>
            </div>
            <a href="{{route('coursescart')}}" class="d-none d-lg-block btn bg-primarycolor text-white btn-cart me-2 py-1"
              style="background-color: var(--primary-color) !important">
              <span class="cart-counter bg-darkcolor rounded-circle text-white">
                2
              </span>
              <i class="navbar-icon fa-solid fa-cart-shopping"></i>
            </a>

            <div class="dropdown me-2 d-none d-lg-block">
              <button class="btn bg-graycolor dropdown-toggle text-white py-1"
                style="background-color: var(--gray-color) !important" type="button" id="dropdownMenuUser"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="navbar-icon fa-solid fa-user"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuUser">
                @auth
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.profile')}}">Profile</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.logout')}}">Log out</a>
                </li>
                @else
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.loginpanel')}}">Login</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('user.registerpanel')}}">Signup</a>
                </li>
                @endauth
              </ul>
            </div>

            <div class="dropdown d-none d-lg-block">
              <button class="btn bg-graycolor dropdown-toggle text-white py-1"
                style="background-color: var(--gray-color) !important" type="button" id="dropdownMenuMore"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="navbar-icon fa-solid fa-ellipsis-vertical"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuMore">
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('creators')}}">Instructors</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('creator.detail')}}">Instructor Details</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('creator.detail')}}">Product List
                    Category</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-creator.html">Product List
                    Creator</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-special.html">Product List
                    Special</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="productlist-campaign.html">Product List
                    Campaign</a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <button class="d-block d-lg-none btn bg-primarycolor text-white btn-cart me-2"
        style="background-color: var(--primary-color) !important">
        <span class="cart-counter bg-darkcolor rounded-circle text-white">
          2
        </span>
        <i class="fa-solid fa-cart-shopping"></i>
      </button>
    </div>
  </nav>

 @include('storefront.subnav')
