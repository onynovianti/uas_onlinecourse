@extends('partials.main_user')

@section('konten')
<div class="breadcrumb-area breadcrumb-padding-7">
    <div class="container">
        <div class="breadcrumb-content text-center" style="margin-top: -10%">
            <div class="breadcrumb-title breadcrumb-title-responsive">
                <h2 data-aos="fade-up" data-aos-delay="200">Detail Course</h2>
            </div>
            <ul data-aos="fade-up" data-aos-delay="300">
                <li>
                    <a href="/user">HOME</a>
                </li>
                <li>
                    >
                </li>
                <li>DETAIL COURSE</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area section-padding-lr-2 pb-115">
    <div class="container-fluid">
        <div class="back-to-shop" data-aos="fade-up" data-aos-delay="200">
            <a href="/explorecourse"><img class="injectable" src="{{ asset('assets/images/icon-img/arrow-left-6.svg') }}" alt=""> Back to Courses</a>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="product-details-tab" data-aos="fade-up" data-aos-delay="300">
                    <div class="pro-dec-big-img-slider">
                        <img src="{{ asset('storage/uploads/course/'.$course->gambar) }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product-details-content product-details-mrg-left">
                    <div class="product-rating-stock-review" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-stock">
                            <a href="#"><img src="assets/images/icon-img/check-circle.svg" alt=""></a>
                            <span>Enroll Allowed</span>
                        </div>
                    </div>
                    <h2 data-aos="fade-up" data-aos-delay="300">{{ $course->title }}</h2>
                    <div class="product-details-price" data-aos="fade-up" data-aos-delay="400">
                        <span>
                            @if($course->price == 0)
                                Free
                            @else 
                                {{ $course->price }}
                            @endif
                        </span>
                    </div>
                    <p data-aos="fade-up" data-aos-delay="500">{{ $course->short_description }}</p>
                    <form role="form" action="/enroll/{{ $course->id }}" method="POST" enctype="multipart/form-data" id="add_payment">@csrf </form>
                    <input form="add_payment" type="file" name="payment" id="payment">
                    <div class="product-details-quality-cart" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-cart">
                            @if($course->price == 0)
                                <script>
                                    document.getElementById('payment').style.display = 'none';
                                </script>
                                <a href="/enroll/{{ $course->id }}">Enroll Now</a>
                            @else
                                <a form="add_payment" type="submit" onclick="document.getElementById('add_payment').submit();"> Enroll Now</a>
                            @endif
                            
                        </div>
                    </div>
                    <div class="product-details-wishlist-compare" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-details-wishlist">
                            <a href="#">
                                <img class="injectable" src="assets/images/icon-img/heart-2.svg" alt="">
                                Add to wishlist
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-180 border-bottom-1 ">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="tab-style-2 nav mb-70" data-aos="fade-up" data-aos-delay="200">
                <a class="active" href="#des-details1" data-bs-toggle="tab">Description </a>
                <a href="#des-details2" data-bs-toggle="tab" class=""> Requirements </a>
                <a href="#des-details3" data-bs-toggle="tab" class=""> Outcomes </a>
                <a href="#des-details4" data-bs-toggle="tab"> Currciculum </a>
                <a href="#des-details5" data-bs-toggle="tab"> About Instructor </a>
            </div>
            <div class="tab-content">
                <div id="des-details1" class="tab-pane active">
                    <div class="product-description-wrapper">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pro-description-content" data-aos="fade-up" data-aos-delay="400">
                                    <p>{{ $course->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="des-details2" class="tab-pane">
                    <div class="vendor-info-content">
                        <ul>
                            @foreach ($requirements as $r)
                                <li>{{ $r->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="des-details3" class="tab-pane">
                    <div class="vendor-info-content">
                        <ul>
                            @foreach ($outcomes as $r)
                                <li>{{ $r->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="des-details4" class="tab-pane">
                    <div class="vendor-info-content">
                            @foreach ($pertemuan as $p)
                                <b>{{ $p->pertemuan }}</b>
                                @foreach ($curriculum as $c)
                                    @if($c->pertemuan == $p->pertemuan)
                                    <p>{{ $c->jenis }}</p>
                                    @endif
                                @endforeach
                            @endforeach
                    </div>
                </div>
                <div id="des-details5" class="tab-pane ">
                    <div class="vendor-info-content">
                        <p>{{ $course->instruktur->name }}</p><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection