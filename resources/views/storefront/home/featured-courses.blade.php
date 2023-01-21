<section class="discounts section-padding ">
    <div class="container">
      <div class="w-100  d-flex align-items-center justify-content-between">
        <h2 class="color-primary">Öne Çıkanlar</h2>
        <a href="#" class="color-primary text-decoration-none">Hepsini Göster <i
            class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="row" style="--bs-gutter-y: 1rem">
        @foreach($featuredCourses as $c)
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="newproduct-card">
            <a href="productdetail.html" class="newproduct-card--link">
              <img src="{{Storage::url($c->course->card_image)}}" alt="" />
              <div class="newproduct--off">
                <span>25% OFF</span>
              </div>
              <div class="newproduct--content">
                <div class="container d-flex flex-column mt-3">
                  <small class="color-gray">Category: {{$c->course->category->title_tr}}</small>
                  <span class="color-primary text-decoration-none newproduct--title">{{$c->course->title}}</span>
                  <div class="creator">
                    <img src="{{asset('assets/home')}}/assets/images/aboutus.png" alt="" />
                    <span class="color-gray">by {{$c->course->user->name}}</span>
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
      </div>
    </div>
  </section>
