<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Humbara | Signup</title>

    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <!-- fontawesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- swiper -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('assets/home')}}/css/main.css" />
  </head>

  <body class="h-100">
    <div class="row g-0 h-100">
      <div
        class="col-12 col-sm-5 d-flex align-items-center justify-content-center"
      >
        <div class="px-sm-5 px-3 py-3">
          <nav class="d-flex align-items-center justify-content-between">
            <a href="/" class="navbar-brand">
              <img src="{{asset('assets/home')}}/assets/icons/nav_logo.png" alt="logo image" />
            </a>
            <div class="d-flex align-items-center justify-content-between">
              <div class="dropdown">
                <button
                  class="btn bg-graycolor text-white dropdown-toggle"
                  style="background-color: var(--gray-color) !important"
                  type="button"
                  id="dropdownMenuLanguage"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fa-solid fa-globe"></i>
                </button>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="dropdownMenuLanguage"
                >
                  <li><a class="dropdown-item" href="#">Turkish</a></li>
                  <li><a class="dropdown-item" href="#">English</a></li>
                </ul>
              </div>

              <div class="vr mx-3"></div>

              <a href="#" class="text-decoration-none color-dark">Support</a>
            </div>
          </nav>

          <div class="mt-5">
            <h3 class="mb-2 fw-bold">Get Started</h3>
            <span>
              <small
                >Already have an account?
                <a href="/login.html" class="color-primary">Login</a></small
              >
            </span>
            <div
              class="socialmedia-auth mt-5 d-flex align-items-center justify-content-evenly"
            >
              <button
                class="btn bg-lightcolor text-white"
                style="
                  background-color: var(--light-color) !important;
                  width: 5rem;
                  height: 3rem;
                "
              >
                <i class="fa-brands fa-google google-color fs-6"></i>
              </button>
              <button
                class="btn bg-lightcolor text-white"
                style="
                  background-color: var(--light-color) !important;
                  width: 5rem;
                  height: 3rem;
                "
              >
                <i class="fa-brands fa-facebook-f facebook-color fs-6"></i>
              </button>
              <button
                class="btn bg-lightcolor text-white"
                style="
                  background-color: var(--light-color) !important;
                  width: 5rem;
                  height: 3rem;
                "
              >
                <i class="fa-brands fa-twitter twitter-color fs-6"></i>
              </button>
            </div>

            <div class="or-divider">
              <span>OR</span>
            </div>

            <form class="mb-5">
              <div class="mb-3">
                <label for="exampleInputFullname" class="form-label"
                  >Full Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  id="exampleInputFullname"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword1"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="exampleInputPassword2"
                />
              </div>
              <button
                type="submit"
                class="btn bg-primarycolor text-white"
                style="background-color: var(--primary-color)"
              >
                Register
              </button>
            </form>

            <small
              >By clicking Join, I confirm that I have read and agree to the
              <a href="#" class="color-primary">Terms of Service</a> and
              <a href="#" class="color-primary">Privacy Policy</a>.</small
            >
          </div>
        </div>
      </div>
      <div
        class="col-12 d-none d-sm-block col-sm-7 position-relative d-flex px-5 align-items-center"
        style="
          background-image: url('https://images.unsplash.com/photo-1571839154183-6bb84a567903?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=594&q=80');
        "
      >
        <h1
          class="text-white fw-bold position-absolute p-5"
          style="z-index: 11; bottom: 170px"
        >
          Join the only curated CG marketplace
        </h1>
        <div class="cover-img"></div>
      </div>
    </div>

    <!-- scripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
