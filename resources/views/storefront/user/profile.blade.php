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
      <section id="profile-banner" class="purchase-banner">
        <h1>Profile & Settings</h1>
      </section>
      <section id="profile-content">
        <form action="">
          <div class="profile-content--part" id="first-part">
            <div class="image-content">
              <div id="profile-frame">
                <img src="{{asset('assets/home')}}/assets/images/profile-exmp.jpg" alt="" />
              </div>
              <div id="profile--image-option">
                <label for="">Change Your image</label>
                <div class="image-load-input">
                  <input type="text" placeholder="Image Upload" />
                  <button>Upload</button>
                </div>
              </div>
            </div>
  
            <label for="name">First Name</label>
            <input type="text" placeholder="Your Name" />
            <label for="surname">Last Name</label>
            <input type="text" placeholder="Your Surname" />
            <label for="job-title">Job Title</label>
            <input type="text" placeholder="Your Job" />
            <label for="bio">Your Biography</label>
            <textarea
              name=""
              id="bio"
              cols="30"
              rows="10"
              placeholder="Your Bio"
            ></textarea>
          </div>
          <div class="profile-content--part">
            <label for="website">Website</label>
            <input type="text" placeholder="Username" />
            <label for="linkedin">Linkedin</label>
            <input type="text" placeholder="Username" />
            <label for="facebook">Facebook</label>
            <input type="text" placeholder="Username" />
            <label for="youtube">Youtube</label>
            <input type="text" placeholder="Username" />
            <label for="lang">Your Language</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Korean</option>
              <option value="1">Turkish</option>
              <option value="2">English</option>
              <option value="3">Arabic</option>
              <option value="4">Spanish</option>
            </select>
            <label for="location">Your Location</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Turkey</option>
              <option value="1">USA</option>
              <option value="2">England</option>
              <option value="3">Africa</option>
              <option value="4">South Korea</option>
            </select>
  
            <div class="form-btns">
              <button>Cancel</button>
              <button>Save</button>
            </div>
          </div>
        </form>
      </section>
      <section id="setting-content">
        <h1>Privacy Setting</h1>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckChecked"
            checked
          />
          <label class="form-check-label" for="flexCheckChecked">
            Show your profile to logged-in users
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckChecked"
            checked
          />
          <label class="form-check-label" for="flexCheckChecked"
            >Show courses you are taking on your profile page
          </label>
        </div>
        <div class="setting-btn"><button>Save</button></div>
      </section>

@endsection