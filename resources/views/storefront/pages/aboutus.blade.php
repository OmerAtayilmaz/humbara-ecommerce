@extends('layouts.storefront')
@section("title","Page Title")
@section('content')
<header class="bg-secondarycolor">
    <div class="container section-padding">
        <div class="row m-0">
            <div class="col-12 col-sm-6 d-flex flex-column align-items-start justify-content-center">
                <h1 class="fw-bold color-dark">Online Courses</h1>
                <p class="color-dark fw-light mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum
                    cupiditate corrupti maiores voluptatum eveniet qui nesciunt
                    officia, dolores minima distinctio facilis reprehenderit veritatis
                    iste.
                </p>
                <button class="btn bg-primarycolor text-white py-2" style="background-color: var(--primary-color)">
                    Browse Courses
                </button>
            </div>
            <div class="col-12 col-sm-6 d-none d-sm-flex">
                <img class="w-100"
                    src="https://zone-assets-api.vercel.app/assets/illustrations/illustration_courses_hero.svg"
                    alt="" />
            </div>
        </div>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        <small class="color-primary">ABOUT US</small>
        <div class="row">
            <div class="col-12 col-sm-6">
                <h2 class="fw-bold">We Make The Best For All Our Customers.</h2>
            </div>
            <div class="col-12 col-sm-6">
                <div class="d-flex align-items-start justify-content-center">
                    <p class="fw-thin color-gray">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas,
                        corrupti. Suscipit aspernatur, ipsum tenetur esse fugiat corporis eius assumenda hic?</p>
                    <p class="fw-thin color-gray ms-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Provident tenetur minima debitis facilis maiores, nam quaerat quam nesciunt cumque, totam
                        est nemo eveniet sit.</p>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 position-relative">
            <img class="w-100 rounded-4"
                src="https://zone-assets-api.vercel.app/assets/images/career/career_about.jpg" alt="">
            <div class="about__section d-sm-flex d-none">
                <div class="d-flex flex-column align-items-start justify-content-center">
                    <h1 class="fw-bold text-white">Our studio has been</h1>
                    <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus,
                        vel.</p>
                    <div class="row w-100">
                        <div class="col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center">
                            <h1 class="color-primary fw-bold">15+</h1>
                            <p class="color-gray">Partners</p>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center">
                            <h1 class="color-primary fw-bold">15+</h1>
                            <p class="color-gray">Partners</p>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center">
                            <h1 class="color-primary fw-bold">15+</h1>
                            <p class="color-gray">Partners</p>
                        </div>
                        <div class="col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center">
                            <h1 class="color-primary fw-bold">15+</h1>
                            <p class="color-gray">Partners</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <small class="color-primary">HUMBARA GAME STUDIO</small>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="fw-bold mb-3">Lorem ipsum dolor sit amet.</h3>
                <p class="color-gray">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum
                    natus est magni laboriosam consequuntur iusto, neque accusamus
                    odit eveniet consectetur in ea, ad omnis!
                </p>
            </div>
            <div class="col-12 col-sm-6">
                <div
                    class="h-100 d-flex flex-sm-column flex-row flex-wrap align-items-start justify-content-between">
                    <div>
                        <p class="color-dark fs-4">Learners</p>
                        <h1 class="fw-bold">14k+</h1>
                        <p class="color-gray">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Asperiores dolor dicta quibusdam totam aliquam, quam magnam
                            voluptatem recusandae.
                        </p>
                    </div>
                    <div>
                        <p class="color-dark fs-4">Courses</p>
                        <h1 class="fw-bold">105k+</h1>
                        <p class="color-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit
                            id beatae voluptatem itaque, perferendis officia saepe
                            inventore mollitia aperiam libero?
                        </p>
                    </div>
                    <div>
                        <p class="color-dark fs-4">Graduates</p>
                        <h1 class="fw-bold">20k+</h1>
                        <p class="color-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Suscipit, sequi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <img class="w-100 rounded-4"
                    src="https://zone-assets-api.vercel.app/assets/images/e-learning/course_about.jpg" alt="" />
            </div>
        </div>
    </div>
</section>

<section class="testimonials section-padding">
    <div class="container">
        <h2 class="color-primary">See what members say!</h2>
        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-slide">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Pariatur accusamus beatae, animi quae consequatur hic
                            inventore.
                        </p>
                        <div>
                            <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                            <p class="name">John Doe</p>
                            <small>CEO</small>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-slide">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Pariatur accusamus beatae, animi quae consequatur hic
                            inventore.
                        </p>
                        <div>
                            <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                            <p class="name">John Doe</p>
                            <small>CEO</small>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-slide">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Pariatur accusamus beatae, animi quae consequatur hic
                            inventore.
                        </p>
                        <div>
                            <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                            <p class="name">John Doe</p>
                            <small>CEO</small>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-slide">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Pariatur accusamus beatae, animi quae consequatur hic
                            inventore.
                        </p>
                        <div>
                            <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                            <p class="name">John Doe</p>
                            <small>CEO</small>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonials-slide">
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Pariatur accusamus beatae, animi quae consequatur hic
                            inventore.
                        </p>
                        <div>
                            <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                            <p class="name">John Doe</p>
                            <small>CEO</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="faq section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-7">
                <h2 class="color-primary mb-5">Frequently Asked Questions</h2>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It
                                is shown by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong>
                                It is hidden by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It
                                is hidden by default, until the collapse plugin adds the
                                appropriate classes that we use to style each element. These
                                classes control the overall appearance, as well as the
                                showing and hiding via CSS transitions. You can modify any
                                of this with custom CSS or overriding our default variables.
                                It's also worth noting that just about any HTML can go
                                within the <code>.accordion-body</code>, though the
                                transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-5 d-flex align-items-center justify-content-center">
                <img class="img-fluid"
                    src="https://zone-assets-api.vercel.app/assets/illustrations/illustration_faqs.svg" alt="" />
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
</section>

@endsection