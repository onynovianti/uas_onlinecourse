@extends('partials.main')

@section('konten')
<div class="slider-area">
    <div class="slider-active-1 nav-style-1">
        <div
            class="single-slider-wrap slider-height-1 custom-d-flex custom-align-item-center single-animation-wrap">
            <div class="slider-img">
                <img src="{{ asset('assets/images/slider/slider-6.webp') }}" alt="">
            </div>
            <div class="slider-content slider-animated-1">
                <h3 class="animated">Learn & Get Certificates</h3>
                <h1 class="animated">Online <br> Course</h1>
                <div class="btn-style">
                    <a class="btn btn-outline-primary slider-btn animated" href="/mustlogin">Explore Courses</a>
                </div>
            </div>
        </div>
        <div
            class="single-slider-wrap slider-height-1 custom-d-flex custom-align-item-center single-animation-wrap">
            <div class="slider-img">
                <img src="{{ asset('assets/images/slider/slider-2.webp') }}" alt="">
            </div>
            <div class="slider-content slider-animated-1">
                <h3 class="animated">Learn & Get Certificates</h3>
                <h1 class="animated">Online <br> Course</h1>
                <div class="btn-style">
                    <a class="btn btn-outline-primary slider-btn animated" href="/mustlogin">Explore Courses</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area" style="padding-top: 10%">
    <div class="section-title st-mb-145 text-center">
        <h2 data-aos="fade-up" data-aos-delay="200">Our Top Categories</h2>
    </div>
</div>

<div class="features-area section-padding-2">
    <div class="container">
        <div class="features-all-wrap">
            <div class="row mb-n6">
                @foreach($category as $c)
                <div class="col-lg-4 col-md-4 mb-6">
                    <div class="features-wrap text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="features-img">
                            <img class="injectable" src="{{ asset('assets/images/icon-img/papper-pin.svg') }}" alt="">
                        </div>
                        <h3><a href="/mustlogin">{{ $c->name }}</a></h3>
                        <p>{{ $c->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="product-area section-padding-lr-1 section-padding-3">
    <div class="container-fluid">
        <div class="section-title mb-12 text-center">
            <h2 data-aos="fade-up" data-aos-delay="200">Explore Online Courses</h2>
        </div>
        <div class="tab-style-1 nav mb-10" data-aos="fade-up" data-aos-delay="300">
            <a class="active" href="#pro-1" data-bs-toggle="tab"> ALL </a>
            <a href="#pro-2" data-bs-toggle="tab" class=""> TOP COURSES </a>
            <a href="#pro-5" data-bs-toggle="tab"> FREE COURSES </a>
        </div>
        <div class="tab-content jump padding-54-row-col">
            <div id="pro-1" class="tab-pane active">
                <div class="row mb-n10">
                    @foreach($all as $a)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-10">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-4">
                                <a href="/mustlogin">
                                    <img class="default-img" src="{{ asset('storage/uploads/course/'.$a->gambar) }}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button title="Quick View" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/eye.svg" alt=""></button>
                                    <button title="Add To Cart" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/bag-2.svg" alt=""></button>
                                    <button title="Wishlist" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/heart.svg" alt=""></button>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="/mustlogin">{{ $a->title }}</a></h3>
                                <div class="product-price">
                                    <span>{{ ($a->price == 0) ? 'Free' : $a->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="pro-2" class="tab-pane">
                <div class="row mb-n10">
                    @foreach($top as $a)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-10">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-4">
                                <a href="/mustlogin">
                                    <img class="default-img" src="{{ asset('storage/uploads/course/'.$a->gambar) }}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button title="Quick View" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/eye.svg" alt=""></button>
                                    <button title="Add To Cart" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/bag-2.svg" alt=""></button>
                                    <button title="Wishlist" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/heart.svg" alt=""></button>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="/mustlogin">{{ $a->title }}</a></h3>
                                <div class="product-price">
                                    <span>{{ ($a->price == 0) ? 'Free' : $a->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
            </div>
            <div id="pro-5" class="tab-pane">
                <div class="row mb-n10">
                    @foreach($free as $a)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-10">
                        <div class="product-wrap" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-img img-zoom mb-4">
                                <a href="/mustlogin">
                                    <img class="default-img" src="{{ asset('storage/uploads/course/'.$a->gambar) }}" alt="">
                                </a>
                                <div class="product-action-wrap">
                                    <button title="Quick View" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/eye.svg" alt=""></button>
                                    <button title="Add To Cart" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/bag-2.svg" alt=""></button>
                                    <button title="Wishlist" onclick="location.href='/mustlogin'"><img class="injectable"
                                            src="assets/images/icon-img/heart.svg" alt=""></button>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="/mustlogin">{{ $a->title }}</a></h3>
                                <div class="product-price">
                                    <span>{{ ($a->price == 0) ? 'Free' : $a->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection