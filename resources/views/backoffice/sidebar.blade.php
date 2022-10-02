    <!-- Sidebar -->
    <ul class="bg-nav navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
            <div class="sidebar-brand-icon">
                <img src="{{asset('assets/admin')}}/img/Game.png" alt="" width="200" height="110">
            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Nav Item - Theme -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.themes')}}">
                <i class="fa-brands fa-affiliatetheme"></i>
                <span>Theme</span></a>
        </li>
        <!-- Nav Item - Slides -->
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.slideslist')}}">
                <i class="fa-solid fa-photo-film fa-fw"></i>
                <span>Slides</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.userlist')}}">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span></a>
        </li>

             <li class="nav-item">
                <a class="nav-link" href="{{route('admin.categorylist')}}">
                    <i class="fa-solid fa-bars fa-fw"></i>
                    <span>Category</span></a>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.settings')}}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Settings</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.faq')}}">
                <i class="fas fa-fw fa-question"></i>
                <span>Faq</span></a>
        </li>
            
        <hr class="sidebar-divider">
         <!-- Nav Item - Course -->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <i class="fas fa-fw fa-book"></i>
                <span>Course</span>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('admin.courses')}}">Courses</a>
                    <a class="collapse-item" href="{{route('admin.createcourse')}}">Create Course</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.contactmessages')}}">
               <i class="fa-solid fa-message fa-fw"></i>
            <span>Messages</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Statistics</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="pieChart#">Pie Chart</a>
                    <a class="collapse-item" href="barChart#">Bar Chart</a>
                    <a class="collapse-item" href="lineChart#">Line Chart</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="images#">
                <i class="fa-solid fa-images fa-fw"></i>
                <span>Images</span></a>
        </li>

   {{--      <li class="nav-item">
            <a class="nav-link" href="favourites#">
                <i class="fa-solid fa-heart"></i>
                <span>Favourites</span></a>
        </li> --}}

{{--         <!-- Nav Item - Video -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseFour">
                <i class="fa-solid fa-video fa-fw"></i>
                <span>Video</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="video#">Videos</a>
                    <a class="collapse-item" href="video-comment#">Video Comment</a>
                </div>
            </div>
        </li> --}}

        <!-- Nav Item - Discount Percent -->
        <li class="nav-item">
            <a class="nav-link" href="discountPercent#">
                <i class="fa-solid fa-tags fa-fw"></i>
                <span>Discount Percent</span></a>
        </li>

{{--         <li class="nav-item">
            <a class="nav-link" href="comment#">
                <i class="fas fa-fw fa-comments"></i>
                <span>Comment</span></a>
        </li> --}}
     {{--    <li class="nav-item">
            <a class="nav-link" href="creditCard#">
                <i class="fas fa-fw fa-credit-card"></i>
                <span>Credit Card</span></a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="order#">
                <i class="fas fa-fw fa-list"></i>
                <span>Order</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="orderCourse#">
                <i class="fa-solid fa-list-check"></i>
                <span>Order Course</span></a>
        </li>

    </ul>
    <!-- End of Sidebar -->