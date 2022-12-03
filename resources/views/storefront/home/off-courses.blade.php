<section id="productList" class="discounts section-padding">
    <div class="container">
      <div class="w-100  d-flex align-items-center justify-content-between">
        <h2 class="color-primary">İndirimli Kurslar | Ay Sonu İndirimleri</h2>
        <a href="{{route('offcourses.list')}}" class="color-primary text-decoration-none">Hepsini Göster <i
            class="fa-solid fa-arrow-right-long"></i></a>
      </div>
      <div class="row" style="--bs-gutter-y: 1rem">

        @foreach($offCourses as $course)
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="newproduct-card">
            <a href="{{$course->id}}" class="newproduct-card--link">
              <img src="{{Storage::url($course->card_image)}}" alt=" {{$course->title . $course->description}}" />
              <div class="newproduct--off">
                <span>{{App\Http\Controllers\Home\HomeController::printCoursePriceText("OFF",$course->course_price)}} </span>
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
                      <span>₺{{App\Http\Controllers\Home\HomeController::printCoursePrice("OFF",$course->course_price)}}</span>
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
