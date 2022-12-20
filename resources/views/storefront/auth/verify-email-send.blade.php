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
        <section class="section-padding">
            <div class="container">
                <div
                    class="d-flex flex-column align-items-center justify-content-center"
                >
                    <i
                        class="fa-solid fa-circle-check text-success"
                        style="font-size: 4rem"
                    ></i>
                    <h3 class="fw-bold mt-4">Email Sent</h3>
                    <p>Check your e-mail address, click the link to confirm your account.</p>
                    <a href="{{route('home')}}"
                       class="btn bg-primarycolor text-white"
                       style="background-color: var(--primary-color)"
                    >
                        <i class="fa-solid fa-arrow-left"></i> Go Home
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
