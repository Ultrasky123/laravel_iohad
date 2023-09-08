<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</head>

<body>

    {{-- Header --}}
    <nav class="navbar navbar-dark bg-transparent fixed-top">
        <div class="gambar1" style="width: 20%; height: 20%">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo 3 warna terang.png') }}"
                    style="height: auto; max-width: 100%"></a>
        </div>
        {{-- Offcanvas Additional Page --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation" style="margin-right: 2rem">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Hamburger Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teams">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="livescreen">LiveScreen View</a>
                    </li>
            </div>
            {{-- End OF Offcanvas Additional Page --}}

        </div>
    </nav>

    {{-- End Of Header --}}

    {{-- Body Content --}}
    {{-- <div class="container-fluid" style="width: 100%; height: 2576px; background-color: black"> --}}
    @yield('content')
    {{-- </div> --}}
    {{-- End Of Body Content --}}

    {{-- Footer --}}
    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <a href="#">
                        <img src="{{ asset('img/logo 3 warna terang.png') }}"
                            style="width: 100%; height: auto; margin-top: -1.25rem">
                    </a>
                    <p class="text-white" style="text-decoration: none; text-align: justify">Lorem ipsum dolor sit
                        amet consectetur
                        adipisicing elit. Ipsam vitae laudantium rem dolore corporis nulla, perferendis sunt
                        repellat facere aspernatur cupiditate eos soluta cum praesentium placeat modi, earum, qui
                        officia!</p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3" style="text-align: left">
                    <h5 class="text-uppercase mb-4 font-weight-bold" style="text-align: left">Products</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none">Smart
                            Mannequin ASP-32</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3" style="text-align: left">
                    <h5 class="text-uppercase mb-4 font-weight-bold">Useful Links</h5>
                    <p><a href="#" class="text-white" style="text-decoration: none">Your Account</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none">Become an
                            Affiliated</a>
                    </p>
                    <p><a href="#" class="text-white" style="text-decoration: none">Shipping Rate</a></p>
                    <p><a href="#" class="text-white" style="text-decoration: none">Help</a></p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold" style="text-align: left">Contact</h5>
                    <p style="text-align: justify"><i class="fa fa-home mr-3"></i> STAS-RG Military And Defense
                        Industry Laboratory, 1st Floor,
                        Applied Science School, Telkom University, Indonesia</p>
                    <p style="text-align: justify"><i class="fa fa-envelope mr-3"></i> theproviders@gmail.com</p>
                    <p style="text-align: justify"><i class="fa fa-phone mr-3"></i> +92 123214123</p>
                    <p style="text-align: justify"><i class="fa fa-print mr-3"></i> +01 323 412 22</p>
                </div>
            </div>

            <hr class="mb-4">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright ©2023 All rights reserved by:
                        <a href="#" style="text-decoration: none;">
                            <strong class="text-white">STAS Research Group</strong>
                        </a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="fab fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="fab fa-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px"><i
                                        class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Of Footer --}}
</body>

</html>
