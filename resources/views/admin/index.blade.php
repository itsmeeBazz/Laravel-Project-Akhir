@extends('layouts.layout')

@section('content')
    <section style="margin-top: 50px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat Datang di Halaman Dashboard Admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-lg rounded-md border-0">
                        <img src="{{asset('assets/background/background3.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Atur dan Kelola Artikel</p>
                            <a href="{{route('blog')}}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-lg rounded-md border-0">
                        <img src="{{asset('assets/background/background3.jpeg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Video Artikel</h5>
                            <p class="card-text">Atur dan Kelola Video</p>
                            <a href="{{route('video')}}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection