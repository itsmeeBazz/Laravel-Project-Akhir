@extends('layouts.layout')

@section('content')
    <section class="py-5" style="margin-top: 50px">
        <div class="container col-xxl-8 py-5">
            <h4 class="fw-bold mb-3">Halaman Blog Artikel</h4>

            <a href="{{route('blog.create')}}" class="btn btn-primary mb-3">Buat Artikel</a>

            {{-- Pesan Sukses --}}
            {{-- @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

            <div class="table-responsive py-3">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($artikels as $artikel)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>
                                    <img src="{{asset('storage/artikel/'.$artikel->image)}}" height="100" alt="">
                                </td>
                                <td>
                                    {{ $artikel->judul}}
                                </td> 
                                <td>
                                    <a href="{{route('blog.edit', $artikel->id)}}" class="btn btn-warning">
                                        <i class="bi bi-pencil"></i> Edit</a>
                                    <form action="{{route('blog.destroy', $artikel->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger show_confirm">
                                            <i class="bi bi-trash"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection