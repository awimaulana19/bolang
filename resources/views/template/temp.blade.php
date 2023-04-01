<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/temp.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.png') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('image/logo.png') }}" alt="" width="170px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lapangan">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/etiket">E-Ticket</a>
                    </li>
                </ul>
                @auth
                    @if (auth()->user()->roles == 'pengguna')
                        <ul class="navbar-nav ms-lg-4 me-lg-5">
                            <li class="d-none nav-item d-lg-flex align-items-center me-2">
                                <span class="garis"></span>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ explode(' ', auth()->user()->nama)[0] }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/akun"><i class="bi bi-person me-1"></i> Akun</a>
                                    </li>
                                    <li><a class="dropdown-item" href="/transaksi"><i class="bi bi-journal-text me-1"></i>
                                            Transaksi</a></li>
                                    <li><a class="dropdown-item" href="/keluar"><i class="bi bi-box-arrow-right me-1"></i>
                                            Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @else
                        <a href="/registrasi" class="btn-temp">REGISTER</a>
                        <a href="/login" class="btn-temp">LOGIN</a>
                    @endif
                @else
                    <a href="/registrasi" class="btn-temp">REGISTER</a>
                    <a href="/login" class="btn-temp">LOGIN</a>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container baris-temp">
        @yield('content')
    </div>
    <footer class="footer-edit">
        <div class="container">
            <div class="row m-auto">
                <div class="col-3">
                    <p class="pilihan">Menu</p>
                    <p><a href="/">Home</a></p>
                    <p><a href="/etiket">E-Ticket</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Produk</p>
                    <p><a href="/lapangan">Lapangan</a></p>
                    <p><a href="/promo">Promo</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Bantuan</p>
                    <p><a href="https://wa.me/6282397032649?text=Hi+Admin.+Saya+ingin+bertanya+mengenai+Bolang">Live
                            Chat</a></p>
                    <p><a href="https://www.instagram.com/awimaulana19/">Sosmed</a></p>
                </div>
                <div class="col-3">
                    <p class="pilihan">Pembayaran</p>
                    <div class="logopembayaran">
                        <img src="{{ asset('image/bri.png') }}" alt="logo">
                        <img src="{{ asset('image/bni.png') }}" alt="logo">
                        <img src="{{ asset('image/bca.png') }}" alt="logo">
                        <img src="{{ asset('image/mandiri.png') }}" alt="logo">
                        <img src="{{ asset('image/gopay.png') }}" alt="logo">
                        <img src="{{ asset('image/dana.png') }}" alt="logo">
                        <img src="{{ asset('image/ovo.png') }}" alt="logo">
                        <img class="linkajafoot" src="{{ asset('image/linkaja.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
