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
        <div class="swiper pageheader-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide w-100 position-relative">
              <img
                class="w-100 h-100"
                style="object-fit: cover"
                src="https://images.unsplash.com/photo-1585620385456-4759f9b5c7d9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                alt=""
              />
              <div class="cover-img"></div>
              <div
                class="position-absolute top-50 start-50 translate-middle"
                style="z-index: 11"
              >
                <h1 class="text-white">Explore Instructors</h1>
              </div>
            </div>
            <div class="swiper-slide w-100 position-relative">
              <img
                class="w-100 h-100"
                style="object-fit: cover"
                src="https://images.unsplash.com/photo-1511882150382-421056c89033?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                alt=""
              />
              <div class="cover-img"></div>
              <div
                class="position-absolute top-50 start-50 translate-middle"
                style="z-index: 11"
              >
                <h1 class="text-white">Explore Instructors</h1>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </header>
  
      <section class="section-padding">
        <div class="container">
          <h2 class="color-primary mb-5">Popular Instructors</h2>
          <div class="swiper slidesperview-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
              <div class="swiper-slide p-2">
                <div class="d-flex align-items-start-justify-content-center">
                  <div class="me-2">
                    <img
                      style="width: 4rem; height: 4rem; border-radius: 50%"
                      src="https://cdn.flippednormals.com/wp-content/uploads/2020/12/22060513/Larry_user_avatar.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="flex-grow d-flex flex-column align-items-start justify-content-start"
                  >
                    <a
                      href="#"
                      class="fs-4 fw-bold mb-2 color-dark text-decoration-none"
                      >John Doe</a
                    >
                    <small>Painter, Designer</small>
                    <div class="stars my-3">
                      <i class="fa-solid fa-star color-star"></i>
                      <span><span class="fw-bold">4.0</span> (21 reviews)</span>
                    </div>
                    <small><span class="fw-bold">15</span> courses</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>
  
      <section class="section-padding">
        <div class="container">
          <h2 class="color-primary mb-5">All Instructors</h2>
          <div
            class="d-flex align-items-sm-center align-items-start flex-column flex-sm-row justify-content-lg-end justify-content-center"
          >
            <button
              class="btn bg-primarycolor d-lg-none text-white me-sm-3 me-0 mb-sm-0 mb-3"
              style="background-color: var(--primary-color) !important"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasResponsive"
              aria-controls="offcanvasResponsive"
            >
              Filter
            </button>
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
            <div class="col-12 col-lg-3">
              <div
                class="offcanvas-lg offcanvas-end"
                tabindex="-1"
                id="offcanvasResponsive"
                aria-labelledby="offcanvasResponsiveLabel"
              >
                <div class="offcanvas-header">
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    data-bs-target="#offcanvasResponsive"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <form>
                    <div class="mb-4">
                      <div>
                        <label class="form-label fw-bold" for="amount"
                          >Price range:
                        </label>
                        <input
                          type="text"
                          id="amount"
                          readonly
                          style="
                            border: 0;
                            color: var(--primary-color);
                            font-weight: bold;
                          "
                        />
                      </div>
                      <div id="slider-range" class="mt-2"></div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label fw-bold">License</label>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault1"
                        />
                        <label class="form-check-label" for="flexRadioDefault1">
                          Commercial Use
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault2"
                          checked
                        />
                        <label class="form-check-label" for="flexRadioDefault2">
                          Personal Use
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label for="reviewRate" class="form-label fw-bold"
                        >Rating</label
                      >
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
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Cinema 4D
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          ZBrush
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          3DS Max
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          Maya
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label fw-bold">Categories</label>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          3D Assets
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          Low Poly
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Game Ready
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          Other
                        </label>
                      </div>
                    </div>
                    <div class="mb-4">
                      <label class="form-label fw-bold">Tags</label>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          City
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          Building
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckDefault"
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                          Map
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="checkbox"
                          value=""
                          id="flexCheckChecked"
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                          Landscape
                        </label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-9">
              <div class="row" style="--bs-gutter-y: 1rem">
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                  <div class="author-card text-center">
                    <div class="position-relative">
                      <img
                        src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""
                      />
  
                      <div
                        class="author-card-overlay position-absolute top-0 start-0 end-0 bottom-0 d-flex align-items-end justify-content-center"
                      >
                        <div class="cover-img" style="border-radius: 1rem"></div>
                        <div class="social-icons my-3" style="z-index: 11">
                          <!-- Facebook -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-facebook-f"></i
                          ></a>
  
                          <!-- Twitter -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-twitter"></i
                          ></a>
  
                          <!-- Instagram -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-instagram"></i
                          ></a>
  
                          <!-- Linkedin -->
                          <a class="color-primary fs-5" href="#!" role="button"
                            ><i class="fa-brands fa-linkedin-in"></i
                          ></a>
                        </div>
                      </div>
                    </div>
                    <div class="container d-flex flex-column mt-3">
                      <a
                        href="./productlist-creator.html"
                        class="color-primary text-decoration-none fs-3"
                        >John Doe</a
                      >
                      <small class="color-gray">Designer</small>
                    </div>
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