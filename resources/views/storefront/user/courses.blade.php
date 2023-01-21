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
  <!--Banner-->
  <section class="courses-banner">
    <div class="banner--image">
      <img src="{{asset('assets/home')}}/assets/icons/Game.png" alt="" />
    </div>
    <div class="banner--header">
      <h1>Kurslarım</h1>
    </div>
  </section>
  <!--Course Content-->
  <section class="course-content">
    <div class="container col-10">
      <div class="row d-flex align-items-flex-end">
        <nav id="courses-navbar">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button
              class="nav-link active"
              id="nav-home-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-home"
              type="button"
              role="tab"
              aria-controls="nav-home"
              aria-selected="true"
            >
              Kurslar
            </button>
            <button
              class="nav-link"
              id="nav-profile-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-profile"
              type="button"
              role="tab"
              aria-controls="nav-profile"
              aria-selected="false"
            >
              Favoriler
            </button>
            <button
              class="nav-link"
              id="nav-contact-tab"
              data-bs-toggle="tab"
              data-bs-target="#nav-contact"
              type="button"
              role="tab"
              aria-controls="nav-contact"
              aria-selected="false"
            >
              Arşiv
            </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
            tabindex="0"
          >
            <div class="filter-options row">
              <div class="filter-types col-sm-12 col-md-8">
                <div class="row">
                  <div class="types--sort col-md-4 col-sm-12">
                    <p>Sıralama</p>
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Son Erişilen Kurslar</option>
                      <option value="1">Yeni Kaydolan Kurslar</option>
                      <option value="2">A'dan Z'ye</option>
                      <option value="3">Z'den A'ya</option>
                    </select>
                  </div>
                  <div class="types--filter col-md-8 col-sm-12">
                    <p>Filtreleme</p>
                    <div class="filter-choice">
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Kategori</option>
                        <option value="1">Favoriler</option>
                        <option value="2">Bütün Kurslar</option>
                        <option value="3">Modelleme Kursları</option>
                        <option value="4">Blender Kursları</option>
                      </select>
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Süreç</option>
                        <option value="1">Devam Eden Kurslar</option>
                        <option value="2">Biten Kurslar</option>
                        <option value="3">Öğrenilecek Kurslar</option>
                      </select>
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Eğitmen</option>
                        <option value="1">John Doe</option>
                        <option value="2">John Doe</option>
                        <option value="3">John Doe</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="filter-search col-md-4 col-sm-12">
                <p>Kurs Ara</p>
                <div class="search-part">
                  <input type="text" />
                  <button>Ara</button>
                </div>
              </div>
            </div>
            <div class="courses-list row">
              @foreach($purchasedCourses as $course)
                <div class="course-card col-sm-6 col-md-4 col-lg-3">
                <div class="link"></div>
                <a class="course-card--link">
                  <div class="card--image">
                    <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                    <span
                      id="image-video-icon"
                      class="material-symbols-outlined"
                    >
                      play_circle
                    </span>
                  </div>
                  <div class="card--detail">
                    <h2>{{$course->course->title}}</h2>
                    <p>Rick Davidson</p>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        aria-label="Example with label"
                        style="width: 25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        25%
                      </div>
                    </div>
                  </div>
                  <div class="card--options">
                    <div class="card-option__icon">
                      <i
                        id="option-icon"
                        class="fa-solid fa-ellipsis-vertical"
                      ></i>
                    </div>
                    <div class="card-option__content">
                      <div class="content-lists">
                        <p id="list-header">Listeler</p>
                        <a href="#">List-1</a>
                        <a href="#">List-2</a>
                        <a href="#">List-3</a>
                      </div>
                      <hr />
                      <div class="content-choices items">
                        <a class="ch-item">
                          <i class="fa-solid fa-share"></i>
                          <p>Share</p>
                        </a>
                        <a class="ch-item">
                          <i class="fa-solid fa-plus"></i>
                          <p>Yeni Liste Oluştur</p>
                        </a>
                        <a class="ch-item">
                          <i class="fa-solid fa-heart"></i>
                          <p>Favorilere Ekle</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              <div class="course-card col-sm-6 col-md-4 col-lg-3">
                <div class="link"></div>
                <a class="course-card--link">
                  <div class="card--image">
                    <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                    <span
                      id="image-video-icon"
                      class="material-symbols-outlined"
                    >
                      play_circle
                    </span>
                  </div>
                  <div class="card--detail">
                    <h2>Complete C# Unity Game Developer</h2>
                    <p>Rick Davidson</p>
                    <div class="progress">
                      <div
                        class="progress-bar"
                        role="progressbar"
                        aria-label="Example with label"
                        style="width: 25%"
                        aria-valuenow="25"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      >
                        25%
                      </div>
                    </div>
                  </div>
                  <div class="card--options">
                    <div class="card-option__icon">
                      <i
                        id="option-icon"
                        class="fa-solid fa-ellipsis-vertical"
                      ></i>
                    </div>
                    <div class="card-option__content">
                      <div class="content-lists">
                        <p id="list-header">Listeler</p>
                        <a href="#">List-1</a>
                        <a href="#">List-2</a>
                        <a href="#">List-3</a>
                      </div>
                      <hr />
                      <div class="content-choices items">
                        <a class="ch-item">
                          <i class="fa-solid fa-share"></i>
                          <p>Share</p>
                        </a>
                        <a class="ch-item">
                          <i class="fa-solid fa-plus"></i>
                          <p>Yeni Liste Oluştur</p>
                        </a>
                        <a class="ch-item">
                          <i class="fa-solid fa-heart"></i>
                          <p>Favorilere Ekle</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="pagination section-padding">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
            tabindex="0"
          >
            <div class="filter-options row">
              <div class="filter-types col-sm-12 col-md-8">
                <div class="row">
                  <div class="types--sort col-md-4 col-sm-12">
                    <p>Sıralama</p>
                    <select
                      class="form-select"
                      aria-label="Default select example"
                    >
                      <option selected>Son Beğenilen Kurslar</option>
                      <option value="1">İlk Beğenilen Kurslar</option>
                      <option value="2">A'dan Z'ye</option>
                      <option value="3">Z'den A'ya</option>
                    </select>
                  </div>
                  <div class="types--filter col-md-8 col-sm-12">
                    <p>Filtreleme</p>
                    <div class="filter-choice">
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Kategori</option>
                        <option value="1">Favoriler</option>
                        <option value="2">Bütün Kurslar</option>
                        <option value="3">Modelleme Kursları</option>
                        <option value="4">Blender Kursları</option>
                      </select>
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Fiyat</option>
                        <option value="1">$75-$125</option>
                        <option value="2">$126-$200</option>
                        <option value="3">$200+</option>
                      </select>
                      <select
                        class="form-select col-md-4 col-sm-6"
                        aria-label="Default select example"
                      >
                        <option selected>Eğitmen</option>
                        <option value="1">John Doe</option>
                        <option value="2">John Doe</option>
                        <option value="3">John Doe</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="filter-search col-md-4 col-sm-12">
                <p>Kurs Ara</p>
                <div class="search-part">
                  <input type="text" />
                  <button>Ara</button>
                </div>
              </div>
            </div>
            <div class="courses-list row">
              @foreach($favouritedCourses as $course)
               <div class="course-card favorite col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="course-card--link">
                  <div class="card--image">
                    <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                    <div
                      class="newproduct--off d-flex align-items-center justify-content-center"
                    >
                      <span>25% OFF</span>
                    </div>
                  </div>
                  <i class="favorite-icon fa-solid fa-heart"></i>
                  <div class="card--detail">
                    <h2>{{$course->course->title}}</h2>
                    <p>Rick Davidson</p>
                    <hr />
                    <div class="container">
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
              @endforeach
              <div class="course-card favorite col-sm-6 col-md-4 col-lg-3">
                <a href="#" class="course-card--link">
                  <div class="card--image">
                    <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                    <div
                      class="newproduct--off d-flex align-items-center justify-content-center"
                    >
                      <span>25% OFF</span>
                    </div>
                  </div>
                  <i class="favorite-icon fa-solid fa-heart"></i>
                  <div class="card--detail">
                    <h2>Complete C# Unity Game Developer</h2>
                    <p>Rick Davidson</p>
                    <hr />
                    <div class="container">
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
            <div class="pagination section-padding">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="nav-contact"
            role="tabpanel"
            aria-labelledby="nav-contact-tab"
            tabindex="0"
          >
            <div class="my-list row">
<!--              <div class="my-list&#45;&#45;header col-12">
                <div class="header-top list-header">
                  <h4>List Name-1</h4>
                  <a href="#"><i class="fa-solid fa-pencil"></i></a>
                  <a href="#"><i class="fa-solid fa-trash"></i></a>
                </div>
                <div class="header-button list-description">
                  <p>
                    List Description Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Quidem
                  </p>
                </div>
              </div>-->
              <div class="my-list--content courses-list row">
              @foreach($favouritedCourses as $course)
                <div class="course-card col-sm-6 col-md-4 col-lg-3">
                  <a href="#" class="course-card--link">
                    <div class="card--image">
                      <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                      <span
                        id="image-video-icon"
                        class="material-symbols-outlined"
                      >
                        play_circle
                      </span>
                    </div>
                    <div class="card--detail">
                      <h2>{{$course->course->title}}</h2>
                      <p>Rick Davidson</p>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-label="Example with label"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        >
                          25%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              @endforeach
                <div class="course-card col-sm-6 col-md-4 col-lg-3">
                  <a href="#" class="course-card--link">
                    <div class="card--image">
                      <img src="{{asset('assets/home')}}/assets/images/fp-image.png" alt="" />
                      <span
                        id="image-video-icon"
                        class="material-symbols-outlined"
                      >
                        play_circle
                      </span>
                    </div>
                    <div class="card--detail">
                      <h2>Complete C# Unity Game Developer</h2>
                      <p>Rick Davidson</p>
                      <div class="progress">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          aria-label="Example with label"
                          style="width: 25%"
                          aria-valuenow="25"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        >
                          25%
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="my-list--pagination w-100">
                <button>Daha Az</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
