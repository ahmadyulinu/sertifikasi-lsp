<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Sport!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/e723ff44a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    
    

</head>

<body class="bg-dark">
    <div class="container-fluid bg-dark h-100">
        <div class="row">
            <div class="col-2 g-0 h-100" id="sidebar">
                <div class="row bg-dark text-white">
                    <img src="{{ '/storage/'.$company[0]->logo }}" alt="" srcset="" class="h-75 d-flex justfiy-content-center border border-dark px-5" style="width: 100%;">
                    <h5 class="text-center">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->is('admin/home') ? 'active' : 'text-white' }}">Home</a>
                    </h5>
                    <div class="col border border-dark" style="height: 100%;">
                        <ul class="nav nav-pills flex-column mb-auto mx-3">
                            <li class="mt-4 nav-item ">
                                <h5>
                                    <a href="{{ route('artikel') }}" class="nav-link {{ request()->is('admin/artikel') ? 'active' : 'text-white' }}">Artikel</a>
                                </h5>
                            </li>
                            <li class="mt-4 nav-item">
                                <h5>
                                    <a href="{{ route('events') }}" class="nav-link {{ request()->is('admin/events') ? 'active' : 'text-white' }}">Event</a>
                                </h5>
                            </li>
                            <li class="mt-4 nav-item">
                                <h5>
                                    <a href="{{ route('gallery') }}" class="nav-link {{ request()->is('admin/gallery') ? 'active' : 'text-white' }}">Galery Foto</a>
                                </h5>
                            </li>
                            <li class="mt-4 nav-item">
                                <h5>
                                    <a href="{{ route('clients') }}" class="nav-link {{ request()->is('admin/clients') ? 'active' : 'text-white' }}">Klien Kami</a>
                                </h5>
                            </li>
                            @if(!Auth::check())
                            <li class="mt-4 nav-item">
                                <h5>
                                <a class="nav-link text-white">Login</a>
                                </h5>
                            </li>
                            <li class="mt-4 nav-item">
                                <h5>
                                    <a href="{{ route('login') }}" class="nav-link text-white">Sign In</a>
                                </h5>
                            </li>
                            <li class="mt-4 nav-item">
                                <h5>
                                    <a href="{{ route('register') }}" class="nav-link text-white">Sign Up</a>
                                </h5>
                            </li>
                            @else
                            <li class="mt-4 nav-item">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                <h5>
                                    <button type="submit" class="nav-link text-white">Logout</button>
                                </h5>
                                </form>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 g-0" id="content-container" >
                <div class="title bg-dark text-white">
                    <h1 class="text-center py-5" style="height: 205px;">{{ $company[0]->name }}</h1>
                </div>
                <div class="navbar bg-dark border-top border-white text-white" style="margin-top:-10px;">
                    <div class="row w-100 ">
                        <div class="col-2 border border-dark text-center pt-2" style="height: 50px; ">
                            <h5>
                                <a href="{{ route('company-route') }}" class="text-decoration-none text-reset {{ request()->is('admin/profile') ? 'active' : 'text-white' }}">
                                    Profile
                                </a>
                            </h5>
                        </div>
                        <div class="col-2 border border-dark text-center pt-2" style="height: 50px; ">
                            <h5>
                                <a href="{{ route('visi') }}" class="text-decoration-none text-reset {{ request()->is('admin/visi') ? 'active' : 'text-white' }}">
                                    Visi dan Misi
                                </a>
                            </h5>
                        </div>
                        <div class="col-2 border border-dark text-center pt-2" style="height: 50px; ">
                            <h5>
                                <a href="{{ route('products') }}" class="text-decoration-none text-reset {{ request()->is('admin/products') ? 'active' : 'text-white' }}">
                                    Produk Kami
                                </a>
                            </h5>
                        </div>
                        <div class="col-2 border border-dark text-center pt-2" style="height: 50px; ">
                            <h5>
                                <a href="{{ route('contacts') }}" class="text-decoration-none text-reset {{ request()->is('admin/kontak') ? 'active' : 'text-white' }}">
                                    Kontak Kami
                                </a>
                            </h5>
                        </div>
                        <div class="col-2 border border-dark text-center pt-2" style="height: 50px; ">
                            <h5>
                                <a href="{{ route('about') }}" class="text-decoration-none text-reset {{ request()->is('admin/about') ? 'active' : 'text-white' }}">
                                    About Us
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="content m-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
    var path = `<?php url(); ?>`
</script>
@yield('scripts')
</html>

