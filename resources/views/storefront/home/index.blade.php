@extends('layouts.storefront')
@section("title","Home Page")
@section('content')


  <section id="heroslider">
    <div class="heroslider__container position-relative">
      <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
          <div class="heroslider--item swiper-slide" style="background-image: url('{{asset('assets/home')}}/assets/images/ouracademy.png')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div>
          <div class="heroslider--item swiper-slide" style="background-image: url('{{asset('assets/home')}}/assets/images/ouracademy.png')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div>
          <div class="heroslider--item swiper-slide" style="background-image: url('{{asset('assets/home')}}/assets/images/ouracademy.png')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div>
        </div>
      </div>
      <button type="button" class="heroslider--button">Keşif Vakti</button>
    </div>
  </section>

  <section class="discounts section-padding">
    <div class="container">
      <div class="w-100  d-flex align-items-center justify-content-between">
        <h2 class="color-primary">Ay Sonu İndirimler</h2>
        <a href="#" class="color-primary text-decoration-none">Hepsini Göster <i
            class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="row" style="--bs-gutter-y: 1rem">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="newproduct-card">
            <a href="productdetail.html" class="newproduct-card--link">
              <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
              <div class="newproduct--off">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
              <div class="newproduct--off" style="background-color: var(--primary-color); color: white">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
              <div class="newproduct--off" style="
                    background-color: var(--light-color);
                    color: var(--dark-color);
                  ">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
              <div class="newproduct--off" style="
                    background-color: var(--hovered-primary-color);
                    color: white;
                  ">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
  </section>

  <section class="discounts section-padding ">
    <div class="container">
      <div class="w-100  d-flex align-items-center justify-content-between">
        <h2 class="color-primary">Öne Çıkanlar</h2>
        <a href="#" class="color-primary text-decoration-none">Hepsini Göster <i
            class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="row" style="--bs-gutter-y: 1rem">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="newproduct-card">
            <a href="productdetail.html" class="newproduct-card--link">
              <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
              <div class="newproduct--off">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
              <div class="newproduct--off" style="background-color: var(--primary-color); color: white">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
              <div class="newproduct--off" style="
                    background-color: var(--light-color);
                    color: var(--dark-color);
                  ">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
              <div class="card__image-area position-relative">
                <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
                <div class="newproduct-card--comments">
                  <div class="d-flex p-4">
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="card__comments--icon align-self-start">
                        <i class="fa-solid fa-quote-left color-muted"></i>
                      </span>
                      <p class="fw-light card__comments--comment text-center p-0 mx-1 mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Rem fuga illum, temporibus itaque nobis harum
                        quasi.
                      </p>
                      <span class="card__comments--icon align-self-end">
                        <i class="fa-solid fa-quote-right color-muted"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="newproduct--off" style="
                    background-color: var(--hovered-primary-color);
                    color: white;
                  ">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">Full 3D Design Design Design Design
                    Design Course</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by John Doe</span>
                  </div>
                </div>
                <hr />
                <div class="container mb-3">
                  <div class="d-flex justify-content-between align-items-center">
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
  </section>

  <section class="section-padding">
    <div class="container">
      <h2 class="color-primary">Section Title</h2>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3 p-3">
          <div class="w-100 h-100 position-relative">
            <img class="section__row--img rounded-4" src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
            <div class="cover-img rounded-4"></div>
            <div class="position-absolute bottom-0 start-50 text-center translate-middle" style="z-index: 9">
              <a href="#" class="section__row--title fw-bold fs-5 text-white text-decoration-none">Youtube'da Bize
                Katıl</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-3">
          <div class="w-100 h-100 position-relative">
            <img class="section__row--img rounded-4" src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
            <div class="cover-img rounded-4"></div>
            <div class="position-absolute bottom-0 start-50 text-center translate-middle" style="z-index: 9">
              <a href="#" class="section__row--title fw-bold fs-5 text-white text-decoration-none">Eğitimlerimiz</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-3">
          <div class="w-100 h-100 position-relative">
            <img class="section__row--img rounded-4" src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="cover-img rounded-4"></div>
            <div class="position-absolute bottom-0 start-50 text-center translate-middle" style="z-index: 9">
              <a href="#" class="section__row--title fw-bold fs-5 text-white text-decoration-none">Oyunlarımız</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 p-3">
          <div class="w-100 h-100 position-relative">
            <img class="section__row--img rounded-4" src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
            <div class="cover-img rounded-4"></div>
            <div class="position-absolute bottom-0 start-50 text-center translate-middle" style="z-index: 9">
              <a href="#" class="section__row--title fw-bold fs-5 text-white text-decoration-none">Bizi Tanı</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="start section-gradient section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h2 class="color-primary">Hemen Başlayın</h2>
          <p class="color-gray">
            Bize katılarak +1500 kişilik akademimizin bir parçası olabilirsin!
          </p>
          <ul class="color-muted">
            <li>Profesyonelce hazırlanmış içerikler ile sektöre hazırlık</li>
            <li>+30 indirilebilir kaynak</li>
            <li>Mobil ve PC üzerinden ömür boyu erişim</li>
            <li>Akademiye giriş için özel Discord sunucusu</li>
            <li>Akademi öğrencilerine özel Brush setleri</li>
            <li>Bitirme sertifikası</li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center">
          <img class="img-fluid rounded-3" src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section class="learn section-padding">
    <div class="container">
      <h2 class="color-primary">What you'll learn in this course</h2>
      <p class="color-gray">
        With over 50+ hours of Unreal Engine 5 content you will learn how to:
      </p>

      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 p-2">
          <div class="course-card w-100">
            <img src="{{asset('assets/home')}}/assets/images/ouracademy.png" alt="" />
            <div class="overlay text-center">
              <h5>Title</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, nostrum.
              </p>
            </div>
          </div>
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
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
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
          <img class="img-fluid" src="https://zone-assets-api.vercel.app/assets/illustrations/illustration_faqs.svg"
            alt="" />
        </div>
      </div>
    </div>
  </section>
@include('storefront.pages.contactus')
@endsection