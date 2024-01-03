{{-- Navbar --}}
<nav class="navbar navbar-expand-lg  py-3 fixed-top {{Request::segment(1) == '' ? '' : 'bg-white shadow'}}">
    <div class="container-fluid container">
        <a class="navbar-brand" href="/">
        <img src="{{asset('assets/icons/logo-1.png')}}" height="40" width="40" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/.#artikel">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#video_youtube">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#footer"></a>
                </li>
            </ul>

            <div class="dropdown">
                <a class="btn btn-secondary border-0 bg-transparent d-flex" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('assets/icons/kucing tengil.jpg')}}" class="rounded-circle" height="40" width="40" alt="">
                    <div class="d-flex flex-row text-center m-2">
                        <h5 class="text-black">Admin</h5>
                    </div>
                </a>
                
                <ul class="dropdown-menu">
                    <li class="justify-content-center items-center d-flex">
                        <div class="btn justify-content-center items-center">
                            @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="btn bg-danger justify-center items-center w-100 ">Logout</button>
                            </form>
                            @else
                            <button class="btn bg-transparent" type="submit">Register</button>
                        @endauth
                        </div>
                    </li>
                    <li class="justify-content-center items-center d-flex">
                        <div class="btn btn-primary justify-content-center items-center w-75">
                            <a class="text-black text-decoration-none" href="{{route('dashboard')}}">Dashboard</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
{{-- Navbar End --}}