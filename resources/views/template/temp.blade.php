<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.png') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/logo.png') }}" alt="" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">E-Ticket</a>
                    </li>
                </ul>
                <a href="#" class="btn-temp">REGISTER</a>
                <a href="#" class="btn-temp">LOGIN</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row baris-temp">
            @yield('content')
        </div>
    </div>
    <footer class="footer-edit">
        <div class="container">
            <div class="row m-auto">
                <div class="col-3">
                    <p class="pilihan">Menu</p>
                    <p><a href="#">Home</a></p>
                    <p><a href="#">E-Ticket</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Produk</p>
                    <p><a href="#">Promo</a></p>
                    <p><a href="#">Lapangan</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Bantuan</p>
                    <p><a href="#">Help Center</a></p>
                    <p><a href="#">Live Chat</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Pembayaran</p>
                    <img src="{{ asset('image/pembayaran.png') }}" alt="Pembayaran" width="200px">
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
