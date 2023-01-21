<section class="categories section-padding">
    <div class="container py-3">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h2 class="color-primary">{{__('pages.all-courses.categories')}}</h2>
                <p class="color-gray">
                    {{__('pages.all-courses.categories-desc')}}
                </p>
            </div>
            <div>
                <a href="#" class="color-primary text-decoration-none"
                >Hepsini Göster <i class="fa-solid fa-arrow-right-long"></i
                    ></a>
            </div>
        </div>

        <div class="row my-3">
            @foreach($categories as $category)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-2">
                    <a
                        href="{{route('courses.bycategory',['id'=>$category->id])}}"
                        class="category-card border border-1 w-100 h-100 d-flex align-items-center justify-content-between text-decoration-none"
                    >
                        <img src="{{asset('assets/home')}}/assets/images/card_img.png" alt="" />
                        <div>
                            <h4 class="color-primary">{{$category->title_tr}}</h4>
                            <p class="color-gray">15 items</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</section>
