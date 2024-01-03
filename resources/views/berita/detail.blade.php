@extends('layouts.layout')

@section('content')
    <section id="detail" style="margin-top: 50px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex">
                <a href="/">Home</a>
                <div class="mx-1"> / </div>
                <a href="{{route('blog')}}">Blog</a>
                <div class="mx-1"> / </div>
                <a href="{{route('blog.create')}}">Buat Artikel</a>
                <div class="mx-1"> / </div>
                <a href="#">Edit Artikel</a>
            </div>
            <div class="header-berita mb-3">
                <h2 class="fw-bold">Detail Artikel</h2>
            </div>
            <img src="{{asset('storage/artikel/' . $artikel->image)}}" class="img-fluid mb-3" alt="">
            <div class="konten-artikel">
                <p class="mb-3">{{$artikel->create_at}}</p>
                <h4 class="fw-bold mb-3 ">{{$artikel->judul}}</h4>
                <p>{!! $artikel->desc!!}</p>
            </div>
        </div>
    </section>
@endsection
