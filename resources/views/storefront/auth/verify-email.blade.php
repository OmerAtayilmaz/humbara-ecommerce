@extends('layouts.auth')
@section('title',"Confirm Account")
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
            <h6 class="text-center fw-bold mt-5 mb-3">Confirm Your Email Address</h6>

            <form class="w-100" action="{{route('user.email.verify')}}" method="post">
                @csrf
                    <input
                        name="email"
                        type="hidden"
                        class="form-control"
                        id="email"
                        placeholder="name@example.com"
                        value="{{Auth::user()->email}}"
                    />

                <button type="submit"
                        class="btn bg-primarycolor text-white w-100 py-3"
                        style="background-color: var(--primary-color)"
                >
                    Send Code
                </button>
            </form>
        </div>
    </div>
@endsection
