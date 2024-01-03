@extends('layouts.layout')

@section('content')
    {{-- Artikel --}}
<section id="artikel" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Artikel yang Ada</h2>
        </div>

        <div class="row py-5">
            @foreach ($artikels as $item)
            <div class="col-lg-4">
                <div class="card border-0 mb-5 ">
                    <img src="{{asset('storage/artikel/'. $item->image)}}" class="img-fluid mb-3" alt="">
                    <div class="konten-artikel">
                        <p class="mb-3 text-secondary">{{ $item->create_at}}</p>
                        <a href="/detail/{{ $item->slug}}" class="text-decoration-none text-black">
                            <h4 class="fw-bold mb-3 ">{{$item->judul}}</h4>
                        </a>
                        <div class="d-flex flex-row gap-2 w-50">
                            <p class="text-secondary">{{ $item->created_at->diffForHumans()}}</p>
                        </div>
                        <a href="/detail/{{ $item->slug}}" class="text-decoration-none text-black">
                            <p class="text-danger ">Selengkapnya</p>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>
{{-- Artikel End --}}
@endsection
