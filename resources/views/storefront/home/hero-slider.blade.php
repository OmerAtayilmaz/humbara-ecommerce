<section id="heroslider">
    <div class="heroslider__container position-relative">
      <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
          @foreach($heroSlides as $slide)
          <div class="heroslider--item swiper-slide" style="background-image: url('{{Storage::url($slide->image)}}')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div>
          @endforeach
 {{--          <div class="heroslider--item swiper-slide" style="background-image: url('{{asset('assets/home')}}/assets/images/ouracademy.png')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div>
          <div class="heroslider--item swiper-slide" style="background-image: url('{{asset('assets/home')}}/assets/images/ouracademy.png')">
            <div class="heroslider--item--filter w-100 h-100 d-flex justify-content-center align-items-end"></div>
          </div> --}}
        </div>
      </div>
      <button type="button" class="heroslider--button">Keşif Vakti</button>
    </div>
  </section>