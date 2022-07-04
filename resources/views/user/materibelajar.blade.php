@extends('partials.main_user')

@section('konten')
<div class="breadcrumb-area breadcrumb-padding-6">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <div class="breadcrumb-title" style="margin-top: -10%">
                <h2>STUDY MATERIAL</h2>
            </div>
            <ul>
                <li>
                    <a href="/userl">HOME</a>
                </li>
                <li>
                    >
                </li>
                <li>STUDY MATERIAL</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-details-area pb-150">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="blog-details-wrap">
                    @foreach($cur as $c)
                    <p><b>{{ $c->pertemuan }} : </b>{{ $c->jenis }}</p>
                        @if($c->jenis == 'Youtube Video')
                        <iframe width="800" height="500" src="https://www.youtube.com/embed/videoseries?list=PLsyvDWwjkTqtOmqAiTzzfHspTAztB-udL" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        @elseif($c->jenis == 'Document File')
                        <embed src="{{ asset('storage/uploads/materi/'.$c->materi) }}" type="application/pdf"   height="700px" width="800">
                        @elseif($c->jenis == 'Video File')
                        <video width="400" controls>
                            <source src="{{ asset('storage/uploads/materi/'.$c->materi) }}" type="video/mp4">
                          </video>
                        @else
                        <img src="{{ asset('storage/uploads/materi/'.$c->materi) }}">
                        @endif
                    @endforeach
                    {{-- {{ $cur }} --}}
                    {{-- @foreach($cur) --}}
                        {{-- @if($c->jenis == 'Youtube Video')
                            <iframe width="420" height="315"
                            src="{{ $c->materi }}">
                            </iframe>
                        @elseif($c->jenis == 'Document File')
                        @elseif($c->jenis == 'Video File')
                        @else
                        @endif --}}
                    {{-- @foreach --}}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper sidebar-mrg-responsive">
                    <div class="sidebar-widget mb-45">
                        <div class="sidebar-search">
                            <form class="sidebar-search-form" action="#">
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-75">
                        <h3 class="sidebar-widget-title2">PERTEMUAN </h3>
                        <div class="blog-category">
                            <ul>
                                @foreach($cur as $c)
                                    <li><a>{{ $c->pertemuan." : ". $c->jenis}}</a> <span><input onchange="showMe();" name="sertif" type="checkbox"></span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mb-75" id="sertifikat" style="display: none;">
                        <h3 class="sidebar-widget-title2">DOWNLOAD CERTIFICATE </h3>
                        <div class="blog-category">
                            <ul>
                                <li><a href="{{ asset('storage/uploads/Sertifikat/sertifikat.pdf') }}" download>Click here to download your certificate</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection