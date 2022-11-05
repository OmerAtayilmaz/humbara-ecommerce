<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- bootstrap -->
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
  crossorigin="anonymous"
/>
  <!--
    google fonts
   -->
   <link
   rel="stylesheet"
   href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
 />
 <link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome-ie7.css"
 integrity="sha512-Kpsc+/EabAS1fFZpJxAMbY4UbBNzSJL3J6fxMEqzuL10stipHg0aWcW0W+Rj1CgP0xm86RCAMIvchOCI1eASaA=="
 crossorigin="anonymous"
 referrerpolicy="no-referrer"
/>
<link
 rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
 integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
 crossorigin="anonymous"
 referrerpolicy="no-referrer"
/>  <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous"
/>

<!-- fontawesome -->
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
crossorigin="anonymous"
referrerpolicy="no-referrer"
/>
<!-- fontawesome -->
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<!-- swiper -->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>
  <title>@yield("title","Humbara Games")</title>
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('assets/home')}}/css/main.css" />
</head>
<body>
@include('storefront.header')
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
        <a target="_blank" href="https://discord.com/channels/@omeratayilmaz#6601"><i
            class="fab fa-discord fa-xl"></i></a>
      </div>
      <div class="support__item support__item--whatsapp">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=5511841517"><i
            class="fab fa-whatsapp fa-xl"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- /MODAL -->
@section('content')
@show
@include('storefront.footer')
  <!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>

  <!-- swiper -->
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <script src="{{asset('assets/home')}}/vendors/swiper.js"></script>
  <script src="{{asset('assets/home')}}/vendors/supportbar.js"></script>
  <script src="{{asset('assets/home')}}/vendors/main.js"></script>

</body>

</html>