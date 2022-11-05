 <!-- Sub Navbar -->
 <nav class="navbar d-none d-sm-block bg-darkcolor py-0">
    <div class="container">
      <ul class="w-100 navbar-nav d-flex flex-wrap flex-row align-items-center justify-content-evenly">
        @foreach($categoryList as $category)
        <li class="nav-item">
          <a class="nav-link color-gray" style="font-size: 0.75rem; color: var(--gray-color) !important"
            aria-current="page" href="{{route('courses.bycategory',['id'=>$category->id])}}">{{$category->title_en}}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </nav>