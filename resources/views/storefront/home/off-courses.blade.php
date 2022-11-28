<section id="productList" class="discounts section-padding">
    <div class="container">
      <div class="w-100  d-flex align-items-center justify-content-between">
        <h2 class="color-primary">Ay Sonu İndirimler</h2>
        <a href="#" class="color-primary text-decoration-none">Hepsini Göster <i
            class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="row" style="--bs-gutter-y: 1rem">
        @foreach($offCourses as $course)
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="newproduct-card">
            <a href="{{$course->id}}" class="newproduct-card--link">
              <img src="{{Storage::url($course->card_image)}}" alt=" {{$course->title . $course->description}}" />
              <div class="newproduct--off">
                <span>{{$course->cheap_price}} OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category</small>
                  <span class="color-primary text-decoration-none newproduct--title">{{$course->title}}</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by {{$course->course_owner}}</span>
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
        @endforeach
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
      </div>
    </div>
  </section>