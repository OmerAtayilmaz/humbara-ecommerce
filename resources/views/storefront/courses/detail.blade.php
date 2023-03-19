@extends("layouts.storefront")
@section("title","Product detail")
@section("content")
    <section class="product-detail border-top">
        <div class="gallery-section bg-darkcolor py-5">
            <div class="container">
                <div
                        class="row"
                        style="--bs-gutter-x: 1.75rem; --bs-gutter-y: 0.75rem"
                >
                    <div class="col-12 col-sm-6">
                        <iframe
                                class="w-100 d-none d-sm-block"
                                height="420"
                                style="border-radius: 1rem"
                                src="https://www.youtube.com/embed/e_E9W2vsRbQ"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                        ></iframe>
                        <!-- <img
                          onclick="openModal();currentSlide(1)"
                          src="https://images.unsplash.com/photo-1614767629805-3bbcf6e26c7d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                          alt=""
                        /> -->
                    </div>
                    <div
                            class="col-12 col-sm-6 detail-section d-flex flex-column justify-content-center"
                    >
                        <div
                                class="d-flex align-items-start justify-content-center flex-column"
                                style="flex-grow: 1"
                        >
                            <!-- BREADCRUMB -->
                            <nav
                                    style="--bs-breadcrumb-divider: '>'"
                                    aria-label="breadcrumb"
                            >
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-decoration-none color-primary" href="#"
                                        >Home</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        {{$course->title}}
                                    </li>
                                </ol>
                            </nav>
                            <!-- BREADCRUMB END -->
                            <h3 class="text-white">{{$course->title}}</h3>
                            <div
                                    class="extra text-white d-flex flex-sm-row flex-column align-items-sm-center align-items-start justify-content-start"
                            >
                                <div class="stars me-sm-3 me-0 mb-sm-0 mb-3">
                                    <i class="fa-solid fa-star color-star"></i>
                                    <span>4.0 (21 reviews)</span>
                                </div>
                                <div class="creator">
                                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                    <span>by {{$course->user->name}}</span>
                                </div>
                            </div>
                            <div class="mt-4 text-white">
                                <h4>Description</h4>
                                <p>
                                    {{ $course->description }}
                                </p>
                            </div>
                        </div>
                        @if(\App\Strategies\StoreFrontBasicStrategies::isCourseInCartOrPurchasedByUser($course->id) == \App\Utils\Enums\CourseOwnershipStatus::IN_CART)
                            <div class="d-flex align-items-center">
                                <span class="badge rounded-pill bg-graycolor fs-6">${{ $course->price}}</span>
                                <form>
                                    <button disabled class="btn bg-primarycolor text-white ms-3 px-3 py-1"
                                            style="background-color: var(--primary-color) !important">
                                        {{__('messages.warning.course.already_in_cart')}}
                                    </button>
                                </form>
                            </div>
                        @elseif(\App\Strategies\StoreFrontBasicStrategies::isCourseInCartOrPurchasedByUser($course->id) == \App\Utils\Enums\CourseOwnershipStatus::PURCHASED)
                            <div class="d-flex align-items-center">
                                <span class="badge rounded-pill bg-graycolor fs-6">${{ $course->price}}</span>
                                <form>
                                    <button disabled class="btn bg-primarycolor text-white ms-3 px-3 py-1"
                                            style="background-color: var(--primary-color) !important">
                                        {{__('messages.warning.course.already_bought')}}
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="d-flex align-items-center">
                                <span class="badge rounded-pill bg-graycolor fs-6">${{ $course->price}}</span>
                                <form action="{{route('course.add.cart',['slug'=>$course->slug,'id'=>$course->id])}}"
                                      method="POST">
                                    @csrf
                                    <button type="submit" class="btn bg-primarycolor text-white ms-3 px-3 py-1"
                                            style="background-color: var(--primary-color) !important">
                                        Add to Cart
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- PRODUCT DETAIL -->
        <div class="container">
            <div class="section-padding">
                <div class="row detail-section">
                    <div class="col-12 col-sm-8">
                        <!-- IMAGE GALLERY -->
                        <div class="product-image-gallery w-100 mb-4">
                            <iframe
                                    class="w-100 d-block d-sm-none mb-2"
                                    height="320"
                                    style="border-radius: 1rem"
                                    src="https://www.youtube.com/embed/e_E9W2vsRbQ"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                            ></iframe>
                            <div
                                    class="row"
                                    style="--bs-gutter-y: 0.75rem; --bs-gutter-x: 0.75rem"
                            >
                                @foreach($course->course_images as $item)
                                    <div class="col-6 col-sm-3">
                                        <img
                                                onclick="openModal();currentSlide(1)"
                                                src="{{Storage::url($item->image)}}"
                                                alt="{{$item->description}}"
                                        />
                                    </div>
                                @endforeach
                            </div>

                            <!-- The Modal/Lightbox -->
                            <div id="imageModal" class="image-modal">
                  <span class="image-close cursor" onclick="closeModal()"
                  >&times;</span
                  >
                                <div class="modal-content">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 4</div>
                                        <img
                                                class="w-100"
                                                src="https://images.unsplash.com/photo-1621508638997-e30808c10653?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                                alt=""
                                        />
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">2 / 4</div>
                                        <img
                                                class="w-100"
                                                src="https://images.unsplash.com/photo-1647531452166-3584eb58e6e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                                alt=""
                                        />
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">3 / 4</div>
                                        <img
                                                class="w-100"
                                                src="https://images.unsplash.com/photo-1652558973183-a3f046921163?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=581&q=80"
                                                alt=""
                                        />
                                    </div>

                                    <div class="mySlides">
                                        <div class="numbertext">4 / 4</div>
                                        <img
                                                class="w-100"
                                                src="https://images.unsplash.com/photo-1541474583361-bc9527eb46d6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=557&q=80"
                                                alt=""
                                        />
                                    </div>

                                    <!-- Next/previous controls -->
                                    <a class="image-prev" onclick="plusSlides(-1)">&#10094;</a>
                                    <a class="image-next" onclick="plusSlides(1)">&#10095;</a>

                                    <!-- Caption text -->
                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- IMAGE GALLERY END -->

                        <hr/>

                        <div class="content">
                            {!!  $course->content !!}
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 position-relative">
                        <div class="product-card">
                            <span class="price">$269.99</span>
                            <div class="my-3 w-100">
                                <input
                                        type="radio"
                                        class="btn-check"
                                        name="options-outlined"
                                        id="info-outlined-1"
                                        autocomplete="off"
                                        checked
                                />
                                <label
                                        class="btn btn-outline-secondary w-100 mb-3"
                                        for="info-outlined-1"
                                >Personal License - $8.00</label
                                >
                                <input
                                        type="radio"
                                        class="btn-check"
                                        name="options-outlined"
                                        id="info-outlined-2"
                                        autocomplete="off"
                                />
                                <label
                                        class="btn btn-outline-secondary w-100 mb-3"
                                        for="info-outlined-2"
                                >Commercial License - $16.00</label
                                >
                                @if(\App\Strategies\StoreFrontBasicStrategies::isCourseInCartOrPurchasedByUser($course->id) == \App\Utils\Enums\CourseOwnershipStatus::IN_CART)
                                    <button
                                            class="btn bg-primarycolor text-white w-100 mb-3"
                                            style="background-color: var(--primary-color) !important"
                                            disabled
                                    >
                                        {{__('messages.warning.course.already_in_cart')}}
                                    </button>
                                @elseif(\App\Strategies\StoreFrontBasicStrategies::isCourseInCartOrPurchasedByUser($course->id) == \App\Utils\Enums\CourseOwnershipStatus::PURCHASED)
                                    <button
                                            class="btn bg-primarycolor text-white w-100 mb-3"
                                            style="background-color: var(--primary-color) !important"
                                            disabled
                                    >
                                        {{__('messages.warning.course.already_bought')}}

                                    </button>
                                @else
                                    <button
                                            class="btn bg-primarycolor text-white w-100 mb-3"
                                            style="background-color: var(--primary-color) !important"
                                            disabled
                                    >
                                        Add to Cart
                                    </button>
                                @endif

                            </div>
                            <div>
                                <h5 class="fw-bold">Product Details</h5>
                                <ul>
                                    <li class="list-group-item mb-1">File types: pdf, zip</li>
                                    <li class="list-group-item mb-1">File size: 0.5 MB</li>
                                    <li class="list-group-item mb-1">
                                        Software: <a href="#">ZBrush</a>
                                    </li>
                                    <li class="list-group-item mb-1">
                                        Categories: <a href="#">Plugins</a>, <a href="#">Tools</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT DETAIL END -->
        </div>

        <hr/>

        <div class="container">
            <div class="row section-padding" style="--bs-gutter-y: 2rem">
                <div class="col-12 col-sm-4">
                    <!-- CREATOR INFO -->
                    <div class="creator-info">
                        <img
                                class="rounded-circle img-fluid"
                                src="{{Storage::url($course->user->profile_photo_path)}}"
                                alt=""
                                width="150"
                        />
                        <a
                                class="mt-3 fw-bold fs-4 color-primary text-decoration-none"
                                href="productlist-creator.html"
                        >{{$course->user->name}}</a
                        >
                        <div class="stars my-3">
                            <i class="fa-solid fa-star color-star"></i>
                            <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                        </div>
                        <p>
                            {{$course->user->bio}}
                        </p>
                        <div class="social-icons my-3">
                            <!-- Facebook -->
                            <a class="facebook-color" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                                ></a>

                            <!-- Twitter -->
                            <a class="twitter-color" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                                ></a>

                            <!-- Instagram -->
                            <a class="instagram-color" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                                ></a>

                            <!-- Linkedin -->
                            <a class="linkedin-color" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                                ></a>
                        </div>
                        <small class="color-gray mb-3">Member since Mar 15, 2021</small>
                        <button
                                class="btn bg-primarycolor text-white"
                                style="background-color: var(--primary-color)"
                        >
                            Contact
                        </button>
                    </div>
                    <!-- CREATOR INFO END -->
                </div>
                <div class="col-12 col-sm-8">
                    <div
                            class="w-100 mb-5 d-flex flex-column flex-sm-row align-items-sm-center align-items-start justify-content-between"
                    >
                        <h4 class="fw-bold">4 Reviews</h4>
                        <div
                                class="d-flex align-items-center justify-content-end"
                                style="flex-grow: 1"
                        >
                            <!-- Sorting -->
                            <select class="form-select w-50 me-3" aria-label="Sorting">
                                <option selected>Latest</option>
                                <option value="oldest">Oldest</option>
                                <option value="popular">Popular</option>
                            </select>
                            <button
                                    class="btn bg-primarycolor text-white"
                                    style="background-color: var(--primary-color)"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseReview"
                                    aria-expanded="false"
                                    aria-controls="collapseReview"
                            >
                                Write a Review
                            </button>
                        </div>
                    </div>
                    <!-- Write review -->
                    <div class="collapse write-review mb-5" id="collapseReview">
                        <h4 class="fw-bold mb-5">Review</h4>
                        <form class="needs-validation">
                            <div class="form-group">
                                <label for="reviewRate" class="form-label">Give a Star</label>
                                <div class="rate mb-3" id="reviewRate">
                                    <input type="radio" id="star5" name="rate" value="5"/>
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4"/>
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3"/>
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2"/>
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1"/>
                                    <label for="star1" title="text">1 star</label>
                                </div>
                            </div>
                            <div
                                    class="form-group position-relative mb-3"
                                    style="clear: both"
                            >
                                <label for="reviewName" class="form-label">Full Name</label>
                                <input
                                        type="text"
                                        class="form-control"
                                        id="reviewName"
                                        required
                                />
                                <div class="invalid-tooltip">Name is required.</div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="reviewEmail" class="form-label">Email</label>
                                <input
                                        type="email"
                                        class="form-control"
                                        id="reviewEmail"
                                        required
                                />
                                <div class="invalid-tooltip">Email is required.</div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="reviewContent" class="form-label" required
                                >Review</label
                                >
                                <textarea
                                        class="form-control"
                                        id="reviewContent"
                                        rows="3"
                                ></textarea>
                                <div class="invalid-tooltip">Review is required.</div>
                            </div>
                            <div>
                                <button
                                        class="btn btn-outline-secondary"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseReview"
                                        aria-expanded="false"
                                        aria-controls="collapseReview"
                                >
                                    Cancel
                                </button>
                                <button
                                        class="btn bg-primarycolor text-white"
                                        style="background-color: var(--primary-color)"
                                        type="submit"
                                >
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Comments -->
                    <div>
                        <!-- Comment -->
                        <div
                                class="d-flex align-items-start justify-content-center border-bottom border-2 mb-3"
                        >
                            <!-- Avatar -->
                            <div class="avatar me-4">
                                <img
                                        src="https://zone-assets-api.vercel.app/assets/images/avatars/avatar_1.jpg"
                                        alt=""
                                />
                            </div>
                            <div class="py-3" style="flex-grow: 1">
                                <div
                                        class="d-flex align-items-center justify-content-between"
                                >
                                    <h6 class="fw-bold">John Doe</h6>

                                    <div class="stars">
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <small class="color-gray">15 Jul 2022</small>

                                <p class="mt-3">
                                    Ea architecto quas voluptates voluptas earum illo est vel
                                    rem.
                                </p>

                                <button
                                        class="btn bg-primarycolor text-white"
                                        style="background-color: var(--primary-color) !important"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseReply1"
                                        aria-expanded="false"
                                        aria-controls="collapseReply1"
                                >
                                    Reply
                                </button>

                                <!-- Reply Form -->
                                <div class="collapse mt-3" id="collapseReply1">
                                    <form>
                                        <div class="form-group">
                                            <label for="replyReview">Write comment</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="replyReview"
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Comment -->
                        <div
                                class="d-flex align-items-start justify-content-center border-bottom border-2 mb-3"
                        >
                            <!-- Avatar -->
                            <div class="avatar me-4">
                                <img
                                        src="https://zone-assets-api.vercel.app/assets/images/avatars/avatar_1.jpg"
                                        alt=""
                                />
                            </div>
                            <div class="py-3" style="flex-grow: 1">
                                <div
                                        class="d-flex align-items-center justify-content-between"
                                >
                                    <h6 class="fw-bold">John Doe</h6>

                                    <div class="stars">
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <small class="color-gray">15 Jul 2022</small>

                                <p class="mt-3">
                                    Ea architecto quas voluptates voluptas earum illo est vel
                                    rem.
                                </p>

                                <button
                                        class="btn bg-primarycolor text-white"
                                        style="background-color: var(--primary-color) !important"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseReply2"
                                        aria-expanded="false"
                                        aria-controls="collapseReply2"
                                >
                                    Reply
                                </button>

                                <!-- Reply Form -->
                                <div class="collapse mt-3" id="collapseReply2">
                                    <form>
                                        <div class="form-group">
                                            <label for="replyReview">Write comment</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="replyReview"
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Comment -->
                        <div
                                class="d-flex align-items-start justify-content-center border-bottom border-2 mb-3"
                        >
                            <!-- Avatar -->
                            <div class="avatar me-4">
                                <img
                                        src="https://zone-assets-api.vercel.app/assets/images/avatars/avatar_1.jpg"
                                        alt=""
                                />
                            </div>
                            <div class="py-3" style="flex-grow: 1">
                                <div
                                        class="d-flex align-items-center justify-content-between"
                                >
                                    <h6 class="fw-bold">John Doe</h6>

                                    <div class="stars">
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star color-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>

                                <small class="color-gray">15 Jul 2022</small>

                                <p class="mt-3">
                                    Ea architecto quas voluptates voluptas earum illo est vel
                                    rem.
                                </p>

                                <button
                                        class="btn bg-primarycolor text-white"
                                        style="background-color: var(--primary-color) !important"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseReply3"
                                        aria-expanded="false"
                                        aria-controls="collapseReply3"
                                >
                                    Reply
                                </button>

                                <!-- Reply Form -->
                                <div class="collapse mt-3" id="collapseReply3">
                                    <form>
                                        <div class="form-group">
                                            <label for="replyReview">Write comment</label>
                                            <input
                                                    type="text"
                                                    class="form-control"
                                                    id="replyReview"
                                            />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Pagination -->
                        <nav class="mt-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- You Might Like -->
            <div class="suggestions section-padding">
                <h3 class="color-primary mb-5">You Might Like</h3>
                <div class="row" style="--bs-gutter-y: 1rem">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="newproduct-card">
                            <a href="productdetail.html" class="newproduct-card--link">
                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                <div class="newproduct--off">
                                    <span>25% OFF</span>
                                </div>
                                <div class="newproduct--content">
                                    <div class="container d-flex flex-column mt-3">
                                        <small class="color-gray">Category</small>
                                        <span
                                                class="color-primary text-decoration-none newproduct--title"
                                        >Full 3D Design Design Design Design Design Course</span
                                        >
                                        <div class="creator">
                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                            <span class="color-gray">by John Doe</span>
                                        </div>
                                    </div>
                                    <hr/>
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
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="newproduct-card">
                            <a href="productdetail.html" class="newproduct-card--link">
                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                <div class="newproduct--off">
                                    <span>25% OFF</span>
                                </div>
                                <div class="newproduct--content">
                                    <div class="container d-flex flex-column mt-3">
                                        <small class="color-gray">Category</small>
                                        <span
                                                class="color-primary text-decoration-none newproduct--title"
                                        >Full 3D Design Design Design Design Design Course</span
                                        >
                                        <div class="creator">
                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                            <span class="color-gray">by John Doe</span>
                                        </div>
                                    </div>
                                    <hr/>
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
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="newproduct-card">
                            <a href="productdetail.html" class="newproduct-card--link">
                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                <div class="newproduct--off">
                                    <span>25% OFF</span>
                                </div>
                                <div class="newproduct--content">
                                    <div class="container d-flex flex-column mt-3">
                                        <small class="color-gray">Category</small>
                                        <span
                                                class="color-primary text-decoration-none newproduct--title"
                                        >Full 3D Design Design Design Design Design Course</span
                                        >
                                        <div class="creator">
                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                            <span class="color-gray">by John Doe</span>
                                        </div>
                                    </div>
                                    <hr/>
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
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="newproduct-card">
                            <a href="productdetail.html" class="newproduct-card--link">
                                <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                <div class="newproduct--off">
                                    <span>25% OFF</span>
                                </div>
                                <div class="newproduct--content">
                                    <div class="container d-flex flex-column mt-3">
                                        <small class="color-gray">Category</small>
                                        <span
                                                class="color-primary text-decoration-none newproduct--title"
                                        >Full 3D Design Design Design Design Design Course</span
                                        >
                                        <div class="creator">
                                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt=""/>
                                            <span class="color-gray">by John Doe</span>
                                        </div>
                                    </div>
                                    <hr/>
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
                </div>
            </div>
        </div>

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
                                <input
                                        type="email"
                                        class="form-control py-3"
                                        placeholder="Enter Your Email"
                                />
                                <button
                                        class="btn bg-primarycolor text-white py-3 px-4 position-absolute top-50 end-0 translate-middle-y text-dark"
                                        style="background-color: var(--primary-color)"
                                >
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
