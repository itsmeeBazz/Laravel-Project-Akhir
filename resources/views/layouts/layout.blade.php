<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('assets/icons/logo-1.png')}}">

        <title>Tugas Akhir</title>

        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        {{-- Summernote JS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />


    </head>
    <body>

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Artikel --}}
        @yield('content')

        {{-- Footer --}}
        <section id="footer">
            <div class="container py-4">
                <footer>
                    <div class="row">
                        {{-- Kolom Menu --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Navigasi</h5>
                            <div class="d-flex">
                                <ul class="nav flex-column me-5">
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-dark">Beranda</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-dark">Artikel</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-dark">Daftar</a>
                                    </li>
                                    <li class="nav-item mb-2">
                                        <a href="#" class="nav-link p-0 text-dark">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Kolom Sosmed --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Follow Saya</h5>
                            <div class="d-flex">
                                <a href="#" target="_blank" class="text-decoration-none">
                                    <img src="{{asset('assets/icons/github.svg')}}" height="30" width="30" class="me-4" alt="" >
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none">
                                    <img src="{{asset('assets/icons/instagram.svg')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none">
                                    <img src="{{asset('assets/icons/youtube.svg')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                                <a href="#" target="_blank" class="text-decoration-none">
                                    <img src="{{asset('assets/icons/twitter.svg')}}" height="30" width="30" class="me-4" alt="">
                                </a>
                            </div>
                        </div>

                        {{-- Kolom Kontak --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Kontak Saya</h5>
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-dark">info@loremipsum@gmail.com</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-dark">0874-5345-6789</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-dark">0874-5345-6789</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-dark">0874-5345-6789</a>
                                </li>
                            </ul>
                        </div>

                        {{-- Kolom Alamat --}}
                        <div class="col-12 col-md-3 mb-3">
                            <h5 class="fw-bold mb-3">Alamat Sekolah</h5>
                            <p> Jl. KH Achmad Fauzan No.17, Krasak, Bangsri, Kec. Bangsri, Kabupaten Jepara, Jawa Tengah 59415</p>
                        </div>
                    </div>
                </footer>
            </div>
        </section>

        <section class="bg-light border-top">
            <div class="container py-4">
                <div class="d-flex justify-content-between">
                    <div>
                        ©️ created by Bazz
                    </div>
                    <div class="d-flex">
                        <p class="me-4">Syarat & Ketentuan</p>
                        <p>
                            <a href="#" class="text-decoration-none text-dark">Kebijakan Privacy</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        
                <script>
                    const navbar = document.querySelector('.fixed-top');  
                    window.onscroll = () => {
                        if (window.scrollY > 100) {
                            navbar.classList.add("scroll-nav-active");
                            navbar.classList.add("text-nav-active");
                            // navbar.classList.remove("navbar-dark");
                        } else {
                            navbar.classList.remove("scroll-nav-active");
                            // navbar.classList.add("navbar-dark");
                        }
                    };
                </script>

                {{-- JQUERY --}}
                <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>

                {{-- Summernote JS --}}
                <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
                
                <script>
                    $(document).ready(function() {
                        $('#summernote').summernote({
                            height: 200,
                        });
                    });
                </script>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script type="text/javascript">
                    $(".show_confirm").click(function(event) {
                        let form =  $(this).closest("form");
                        event.preventDefault();
                        Swal.fire({
                            title: "Anda Yakin Akan Menghapus?",
                            text: "You won't be able to revert this!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yakin, data dihapus!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: "Your file has been deleted.",
                                    icon: "success"
                                });
                                form.submit();
                            }
                        });
                    });
                </script>

                {{-- <script>
                    <script type="text/javascript">
                    $(".confirm").click(function(event) {
                        let form =  $(this).closest("form");
                        event.preventDefault();
                        Swal.fire({
                            title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
                        })}
                </script> --}}

    </body>
</html>