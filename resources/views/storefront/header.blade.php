  <!-- Top Bar -->
  <nav class="navbar bg-primarycolor">
    <div class="container">
      <div class="w-100 d-flex align-items-center justify-content-between">
        <div class="d-lg-flex d-none align-items-center justify-content-center m-0">
          <span class="color-dark fs-5">
            <i class="fa-solid fa-bullhorn"></i>
          </span>
          <p class="m-0 ms-2 text-white">Sale Title</p>
        </div>
        <div class="flex-grow-1 m-0">
          <h5 class="text-white text-center m-0">
            <span class="fw-bold">30%</span> off all products
          </h5>
        </div>
        <div class="d-none d-lg-block">
          <button class="btn bg-lightcolor color-dark p-1" style="background-color: var(--light-color)">
            Shop Now
          </button>
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
                Courses <i class="ms-2 fa-solid fa-angle-down"></i>
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
                Assets <i class="ms-2 fa-solid fa-angle-down"></i>
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
                Assets
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
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('userloginpanel')}}">Login</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('userloginpanel')}}">Signup</a>
                </li>
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

          <form class="d-flex nav__form position-relative me-auto mb-sm-0 mb-3" role="search">
            <input class="form-control nav__search--input py-0" type="text" placeholder="Search" aria-label="Search" />
            <button
              class="btn nav__form--button color-primary position-absolute top-50 end-0 translate-middle-y rounded-2 py-0"
              style="
                  background-color: transparent !important;
                  color: var(--primary-color);
                  border: none;
                " type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>

          <div class="d-flex align-items-center">
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
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('userloginpanel')}}">Login</a>
                </li>
                <li>
                  <a class="navbar__dropdown--link dropdown-item" href="{{route('userregisterpanel')}}">Signup</a>
                </li>
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

  <!-- Sub Navbar -->
  <nav class="navbar d-none d-sm-block bg-darkcolor py-0">
    <div class="container">
      <ul class="w-100 navbar-nav d-flex flex-wrap flex-row align-items-center justify-content-evenly">
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">FN Exclusives</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">ZBrush Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">Blender Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">Texturing Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">Modeling Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="productlist-category.html">Free Content</a>
        </li>
      </ul>
    </div>
  </nav>