@extends('layouts.layout')

@section('content')
<section id="hero" class="px-0">
    <div class="container text-center ">
        <div class="hero-title text-white">
            <div class="hero-text">Welcome to <br> Cours Lumière</div>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
        </div>
    </div>
</section>

<section id="materi" style="margin-top: -30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="bg-white rounded-3  shadow justify-content-between p-3 d-flex align-items-center">
                    <div>
                        <h4 class="fs-5 fw-semibold ">Bahasa Indonesia</h4>
                    </div>
                    <img src="{{asset('assets/icons/bahasa-indonesia.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-3  shadow justify-content-between p-3 d-flex align-items-center">
                    <div>
                        <h4 class="fs-5 fw-semibold">Bahasa Jawa</h4>
                    </div>
                    <img src="{{asset('assets/icons/bahasa-jawa.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-3  shadow justify-content-between p-3 d-flex align-items-center">
                    <div>
                        <h4 class="fs-5 fw-semibold">Bahasa Inggris</h4>
                    </div>
                    <img src="{{asset('assets/icons/bahasa-inggris.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="bg-white rounded-3  shadow justify-content-between p-3 d-flex align-items-center">
                    <div>
                        <h4 class="fs-5 fw-semibold">Matematika</h4>
                    </div>
                    <img src="{{asset('assets/icons/mtk.png')}}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Artikel --}}
<section id="artikel" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Artikel yang Ada</h2>
        </div>

        <div class="row py-5">
            @foreach ($artikels as $item)
            <div class="col-lg-4">
                <div class="card border-0 ">
                    <img src="{{asset('storage/artikel/' . $item->image)}}" class="img-fluid mb-3" alt="">
                    <div class="konten-artikel">
                        <a href="/detail/{{ $item->slug}}" class="text-decoration-none text-black">
                            <h4 class="fw-bold ">{{ $item->judul}}</h4>
                        </a>
                            <div class="d-flex flex-row gap-2 w-50">
                                <p class="text-secondary">{{ $item->created_at->diffForHumans()}}</p>
                            </div>
                            <a href="/detail/{{ $item->slug}}" class="text-decoration-none text-black">
                                <p class="text-danger">Selengkapnya</p>
                            </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="footer-artikel text-center">
            <a href="/artikel" class="btn btn-outline-danger">Artikel Lainnya</a>
        </div>
    </div>
</section>
{{-- Artikel End --}}

{{-- Video --}}

<section id="video_youtube" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Video Terkait Pembelajaran</h2>
        </div>

        <div class="row py-5">
            @foreach ($videos as $item)
            <div class="col-lg-4">
                <img src="https://img.youtube.com/vi/{{$item->youtube_code}}/maxresdefault.jpg" width="350" height="230" alt="">
                <div class="mt-3">
                    <h5 class="text-center text-black">{{$item->judul}}</h5>
                </div>
            </div>
            @endforeach
        </div>

        <div class="footer-berita text-center">
            <a href="#" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
</section>
{{-- Video --}}

{{-- Join --}}
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>Ayo Join di Cours Lumière</h5>
                </div>
                <h1 class="fw-bold mb-2">Kenapa harus di Cours Lumière?</h1>
                <p class="mb-3">Karena </p>
                <button class="btn btn-outline-danger">Daftar Sekarang</button>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('assets/background/background3.jpeg')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
{{-- Join End --}}
@endsection