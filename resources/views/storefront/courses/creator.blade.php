@extends('layouts.storefront')
@section("title","Page Title")
@section('content')
    <!-- MODAL -->
    <div class="support__container">
        <div class="support__row">
          <div class="support__item support__item--up opacity-0" id="up-button">
            <a href="#"><i class="fa-solid fa-angles-up"></i></a>
          </div>
          <button class="support__item support__item--collapse border-0">
            <i class="fa-solid fa-share-nodes"></i>
          </button>
          <div class="support__collapse deactive">
            <div class="support__item support__item--discord">
              <a
                target="_blank"
                href="https://discord.com/channels/@omeratayilmaz#6601"
                ><i class="fab fa-discord fa-xl"></i
              ></a>
            </div>
            <div class="support__item support__item--whatsapp">
              <a
                target="_blank"
                href="https://api.whatsapp.com/send?phone=5511841517"
                ><i class="fab fa-whatsapp fa-xl"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /MODAL -->
  
      <header style="height: 80vh">
        <div class="w-100 h-100 position-relative">
          <img
            class="w-100 h-100"
            style="object-fit: cover"
            src="https://images.unsplash.com/photo-1585620385456-4759f9b5c7d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt=""
          />
          <div class="cover-img"></div>
          <div
            class="position-absolute top-50 start-50 translate-middle d-flex flex-column text-center align-items-center justify-content-center"
            style="z-index: 11"
          >
            <img
              style="width: 5rem; height: 5rem; border-radius: 50%"
              src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
              alt=""
            />
            <h2 class="text-white">John Doe</h2>
            <div class="stars my-3">
              <i class="fa-solid fa-star color-star"></i>
              <span class="text-white"
                ><span class="fw-bold">4.0</span> (21 reviews)</span
              >
            </div>
            <p class="color-light">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
              quibusdam error dolorem.
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
          </div>
        </div>
      </header>
  
      <section class="section-padding">
        <div class="container">
          <div
            class="d-flex align-items-sm-center align-items-start flex-column flex-sm-row justify-content-md-end justify-content-center"
          >
            <div
              class="d-flex align-items-center flex-column flex-sm-row justify-content-center"
            >
              <select
                class="form-select me-sm-3 me-0 mb-sm-0 mb-3"
                aria-label="Per Page Select"
              >
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
            <div class="col-12">
              <div class="row" style="--bs-gutter-y: 1rem">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <div class="newproduct-card">
                    <a href="productdetail.html" class="newproduct-card--link">
                      <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                      <div class="newproduct--off">
                        <span>25% OFF</span>
                      </div>
                      <div class="newproduct--content">
                        <div class="container d-flex flex-column mt-3">
                          <small class="color-gray">Category</small>
                          <span
                            class="color-primary text-decoration-none newproduct--title"
                            >Full 3D Design Design Design Design Design
                            Course</span
                          >
                          <div class="creator">
                            <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                            <span class="color-gray">by John Doe</span>
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
              </div>
              <div
                class="w-100 d-flex align-items-center justify-content-center mt-5"
              >
                <button
                  class="btn bg-primarycolor text-white"
                  style="background-color: var(--primary-color)"
                >
                  Load More
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection