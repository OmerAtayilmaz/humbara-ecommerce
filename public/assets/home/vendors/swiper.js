const swiper = new Swiper(".hero-swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  speed: 3000,
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
});

const userCommentSwiper = new Swiper(".user__comment__swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  slidesPerView: 3,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});

const testimonialsSwiper = new Swiper(".testimonials-swiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    renderBullet: function (index, className) {
      return "<span class='" + className + "'></span>";
    },
  },
});

const pageHeaderSwiper = new Swiper(".pageheader-swiper", {
  loop: true,
  speed: 1500,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const slidesPerViewSwiper = new Swiper(".slidesperview-swiper", {
  slidesPerView: 1,
  spaceBetween: 30,

  breakpoints: {
    576: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 30,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});
