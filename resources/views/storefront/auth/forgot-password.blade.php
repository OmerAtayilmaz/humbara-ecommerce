@extends('layouts.auth')
@section('title',"Forgot Password")
@section('content')
    <div class="container py-3" style="height: 90vh">
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
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLanguage">
              <li><a class="dropdown-item" href="#">Turkish</a></li>
              <li><a class="dropdown-item" href="#">English</a></li>
            </ul>
          </div>

          <div class="vr mx-3"></div>

          <a href="#" class="text-decoration-none color-dark">Support</a>
        </div>
      </nav>

      <div
        class="h-100 mx-auto d-flex flex-column align-items-center justify-content-center"
        style="max-width: 480px"
      >
        <img
          src="https://zone-assets-api.vercel.app/assets/icons/ic_lock_password.svg"
          alt=""
        />
        <h3 class="text-center fw-bold mt-5 mb-3">Forgot Your Password?</h3>
        <p class="color-gray text-center mb-5">
          Please enter the email address associated with your account and We
          will email you a link to reset your password.
        </p>
        <form class="w-100" action="{{route('user.forgotpass-panel')}}" method="post">
            @csrf
          <div class="form-floating mb-3">
            <input
                name="email"
              type="email"
              class="form-control"
              id="email"
              placeholder="name@example.com"
              required
            />
            <label for="email">Email address</label>
          </div>
          <button type="submit"
            class="btn bg-primarycolor text-white w-100 py-3"
            style="background-color: var(--primary-color)"
          >
            Reset Password
          </button>
        </form>
      </div>
    </div>
@endsection
