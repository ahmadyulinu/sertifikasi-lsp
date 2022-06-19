<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Sport!</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e723ff44a8.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="row">
                    <img src="{{asset('image/logo.png')}}" alt="" srcset="" class="h-75 d-flex justfiy-content-center border border-dark px-5" style="width: 100%;">
                    <h5 class="text-center border border-dark" style="padding:10px 0px;">
                        <a href="/home" class="text-decoration-none text-reset">Home</a>
                    </h5>
                    <div class="col border border-dark" style="height: 700px;">
                        <ul style="list-style-type: none;">
                            <li class="mt-4">
                                <h5>
                                    <a href="/artikel" class="text-reset text-decoration-none">Artikel</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/events" class="text-reset text-decoration-none">Event</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/gallery" class="text-reset text-decoration-none">Galery Foto</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/clients" class="text-reset text-decoration-none">Klien Kami</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/login" class="text-reset text-decoration-none">Login</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/sign-in" class="text-reset text-decoration-none ps-5">Sign In</a>
                                </h5>
                            </li>
                            <li class="mt-4">
                                <h5>
                                    <a href="/sign-up" class="text-reset text-decoration-none ps-5">Sign Up</a>
                                </h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="title border border-dark">
                    <h1 class="text-center py-5" style="height: 205px;">Nama Perusahaan</h1>
                </div>
                <div class="navbar" style="margin-top:-10px;">
                    <div class="row" style="margin-left: 0;">
                        <div class="col border border-dark text-center pt-2" style="height: 50px; width:315px;">
                            <h5>
                                <a href="/profile" class="text-decoration-none text-reset">
                                    Profile
                                </a>
                            </h5>
                        </div>
                        <div class="col border border-dark text-center pt-2" style="height: 50px; width:315px;">
                            <h5>
                                <a href="/visi" class="text-decoration-none text-reset">
                                    Visi dan Misi
                                </a>
                            </h5>
                        </div>
                        <div class="col border border-dark text-center pt-2" style="height: 50px; width:315px;">
                            <h5>
                                <a href="/products" class="text-decoration-none text-reset">
                                    Produk Kami
                                </a>
                            </h5>
                        </div>
                        <div class="col border border-dark text-center pt-2" style="height: 50px; width:315px;">
                            <h5>
                                <a href="/kontak" class="text-decoration-none text-reset">
                                    Kontak Kami
                                </a>
                            </h5>
                        </div>
                        <div class="col border border-dark text-center pt-2" style="height: 50px; width:315px;">
                            <h5>
                                <a href="/about" class="text-decoration-none text-reset">
                                    About Us
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
