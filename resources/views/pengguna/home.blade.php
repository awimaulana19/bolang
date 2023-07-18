<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.png') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
    <div class="container-fluid">
        <div class="container">
            <div class="row baris-temp">
                <div class="col-lg-5 col-md-12 kata">
                    <h1>Booking Sekarang</h1>
                    <p>Bolang adalah sebuah aplikasi yang membantu pengguna dalam mencari dan memesan
                        lapangan olahraga sesuai dengan
                        kebutuhan mereka. Dalam Bolang, pengguna dapat menemukan berbagai jenis lapangan olahraga, mulai
                        dari lapangan sepak bola, basket, tenis, hingga lapangan futsal. Selain itu, aplikasi ini juga
                        menyediakan informasi lengkap
                        mengenai fasilitas yang tersedia di lapangan, jam operasional, serta harga sewa lapangan.</p>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="gambarhero">
                        <img src="{{ asset('image/hero.png') }}" alt="Hero" width="400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container semuakotak">
        <div class="row">
            <div class="col-4 kotak kotak1">
                <a href="/lapangan"><img src="{{ asset('image/lapangan.png') }}" width="50px"></a>
                <a href="/lapangan">Lapangan</a>
            </div>
            <div class="col-4 kotak">
                <a href="/etiket"><img src="{{ asset('image/eticket.png') }}" width="50px"></a>
                <a href="/etiket">E-Ticket</a>
            </div>
            <div class="col-4 kotak">
                <a href="/promo"><img src="{{ asset('image/promo.png') }}" width="50px"></a>
                <a href="/promo">Promo</a>
            </div>
        </div>
        <div class="row">
            <form action="/cari" method="GET">
                @csrf
                <div class="d-flex justify-content-center pencarian">
                    <input type="text" class="form-control datepicker" id="cari" name="cari">
                    <button type="submit" class="btn btn-success"><img src="{{ asset('image/cari.png') }}"
                            width="30px"></button>
                </div>
            </form>
        </div>
        <hr>
        <div class="row headrekom mt-4 mb-3">
            <div class="col-8">
                <h3>Rekomendasi <span>Lapangan</span></h3>
            </div>
            <div class="col-4">
                <a class="mt-1" href="/lapangan">Selengkapnya..</a>
            </div>
        </div>
        <div class="row rekomendasi">
            @foreach ($olahraga as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/' . $item->id }}"><img class="rounded-3 mb-3"
                            src="{{ asset('storage/' . $item->foto) }}" width="260px" height="380px"></a>
                    <a href="{{ '/pilih/' . $item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
            {{-- <div class="col-xl-3 col-lg-4 col-6">
                <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}"
                        width="260px" height="380px"></a>
                <a href="/pilih">
                    <h5>Lapangan 2</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
            <div class="col-xl-3 col-lg-4 col-6">
                <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}"
                        width="260px" height="380px"></a>
                <a href="/pilih">
                    <h5>Lapangan 3</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
            <div class="col-xl-3 col-lg-4 col-6">
                <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}"
                        width="260px" height="380px"></a>
                <a href="/pilih">
                    <h5>Lapangan 4</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div> --}}
        </div>
        <div class="row mb-4 promo">
            <div class="col-lg-2 col-3 desk">
                <h4>Promo <span>Lapangan</span></h4>
                <p>Booking sekarang, dapatkan penawaran terbaik.</p>
                <a href="/promo">Lihat Lebih banyak</a>
            </div>
            <div class="col-lg-10 col-9">
                <div class="carousel"
                    data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": true }'>
                    @foreach ($lapangan as $item)
                        <div class="carousel-cell">
                            <a href="{{ '/booking/' . $item->id }}">
                                <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                    src="{{ asset('storage/' . $item->foto) }}" width="100%" height="70%">
                            </a>
                            <a href="{{ '/booking/' . $item->id }}">
                                <h5>{{ $item->user->namatempat }}</h5>
                            </a>
                            <h6><span>{{ $item->olahraga->jenis }}</span></h6>
                            <h6>{{ $item->nama_lapangan }}</h6>
                        </div>
                    @endforeach
                    {{-- <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan2.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Kakanta Sport Center</h5>
                        </a>
                        <h6><span>Bulu Tangkis</span></h6>
                        <h6>Lapangan 1</h6>
                    </div>
                    <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan3.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Kakanta Sport Center</h5>
                        </a>
                        <h6><span>Futsal</span></h6>
                        <h6>Lapangan 2</h6>
                    </div>
                    <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan4.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Aeropala Sport Center</h5>
                        </a>
                        <h6><span>Futsal</span></h6>
                        <h6>Lapangan 2</h6>
                    </div>
                    <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan2.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Aeropala Sport Center</h5>
                        </a>
                        <h6><span>Futsal</span></h6>
                        <h6>Lapangan 1</h6>
                    </div>
                    <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan1.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Aeropala Sport Center</h5>
                        </a>
                        <h6><span>Bulu Tangkis</span></h6>
                        <h6>Lapangan 2</h6>
                    </div>
                    <div class="carousel-cell">
                        <a href="/booking">
                            <div class="tanda"><span>PROMO</span></div><img class="rounded-5 mb-3"
                                src="{{ asset('image/lapangan3.png') }}" width="100%" height="70%">
                        </a>
                        <a href="/pilih">
                            <h5>Aeropala Sport Center</h5>
                        </a>
                        <h6><span>Basket</span></h6>
                        <h6>Lapangan 1</h6>
                    </div> --}}
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-4 mb-4 jenis">
            <h3 class="mb-3">Jenis <span>Olahraga</span></h3>
            <div class="carousel2 mb-5"
                data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": true }'>
                <a href="/olahraga/Futsal" class="carousel-cell2">
                    <div class="namaolahraga"><span>Futsal</span></div>
                    <img src="{{ asset('image/futsal.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Mini Soccer" class="carousel-cell2">
                    <div class="namaolahraga"><span>Mini Soccer</span></div>
                    <img src="{{ asset('image/minisoccer.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Bulu Tangkis" class="carousel-cell2">
                    <div class="namaolahraga"><span>Bulu Tangkis</span></div>
                    <img src="{{ asset('image/tenis.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Basket" class="carousel-cell2">
                    <div class="namaolahraga"><span>Basket</span></div>
                    <img src="{{ asset('image/basket.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Gym" class="carousel-cell2">
                    <div class="namaolahraga"><span>GYM</span></div>
                    <img src="{{ asset('image/gym.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Tenis" class="carousel-cell2">
                    <div class="namaolahraga"><span>Tenis</span></div>
                    <img src="{{ asset('image/tenis.png') }}" width="100%" height="100%">
                </a>
                <a href="/olahraga/Tenis Meja" class="carousel-cell2">
                    <div class="namaolahraga"><span>Tenis Meja</span></div>
                    <img src="{{ asset('image/tenismeja.png') }}" width="100%" height="100%">
                </a>
            </div>
        </div>
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
                    <p><a href="https://www.instagram.com/bolang.web.id/">Sosmed</a></p>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>

</body>

</html>
