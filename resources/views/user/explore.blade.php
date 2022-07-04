@extends('partials.main_user')

@section('konten')
    <div class="breadcrumb-area breadcrumb-padding">
        <div class="container">
            <div class="breadcrumb-content text-center" style="margin-top:-10%;">
                <div class="breadcrumb-title" data-aos="fade-up" data-aos-delay="200">
                    <h2>Explore Courses</h2>
                </div>
                <ul data-aos="fade-up" data-aos-delay="300">
                    <li>
                        <a href="/user">HOME</a>
                    </li>
                    <li>
                        >
                    </li>
                    <li>EXPLORE COURSES </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area section-padding-lr-4 pb-235">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="shop-page-wrap">
                        <div class="shop-top-bar">
                            <div class="show-wrap" data-aos="fade-up" data-aos-delay="200">
                                
                            </div>
                            {{-- <div class="shop-sorting-area">
                                <select class="nice-select nice-select-style-2">
                                    <option>Default Sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by latest</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="padding-54-row-col">
                            <div class="row">
                                @if($course === 'No result found')
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-10">
                                    <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                                        <p>{{ $course }}</p>
                                    </div>
                                </div>
                                @else
                                @foreach($course as $a)
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-10">
                                    <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                                        <div class="product-img img-zoom mb-4">
                                            <a href="">
                                                <img class="default-img" src="{{ asset('storage/uploads/course/'.$a->gambar) }}" alt="">
                                            </a>
                                            <div class="product-action-wrap">
                                                <button title="Quick View" onclick="location.href='/detailcourse/{{ $a->id }}'"><img class="injectable"
                                                        src="{{ asset('assets/images/icon-img/eye.svg') }}" alt=""></button>
                                                <button title="Add To Cart" onclick="location.href='https://google.com';"><img class="injectable"
                                                        src="{{ asset('assets/images/icon-img/bag-2.svg') }}" alt=""></button>
                                                <button title="Wishlist" onclick="location.href='https://google.com';"><img class="injectable"
                                                        src="{{ asset('assets/images/icon-img/heart.svg') }}" alt=""></button>
                                            </div>
                                        </div>
                                        
                                        <p class="mt-2">{{ $a->title }}</p>
                                        {{-- <div class="product-content text-center">
                                            <h3><a href="">{{ $a->title }}</a></h3>
                                            <div class="product-price">
                                                <span>{{ ($a->price == 0) ? 'Free' : $a->price }}</span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper sidebar-wrapper-mr">
                        <div class="sidebar-widget mb-80" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="sidebar-widget-title">Featured Category </h3>
                            <div class="shop-category">
                                <ul>
                                    @foreach ($category as $c)
                                        <li><a href="/explorecourse/{{ $c->id }}">{{ $c->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget mb-65" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="sidebar-widget-title">Prices</h3>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <button type="button">Filter</button>
                                    <div class="label-input">
                                        <span>Price: </span>
                                        <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection