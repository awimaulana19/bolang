<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolang | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.png') }}" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
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
    <div class="container-fluid">
        <div class="container">
            <div class="row baris-temp">
                <div class="col-5 kata">
                    <h1>Selamat Beraktivitas</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi suscipit non quisquam eaque
                        eligendi,
                        labore dolores sed. Omnis, sequi. Molestiae ipsa iure nam illum repellendus accusantium,
                        nulla
                        libero adipisci minima Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                        dolorum neque, quisquam aliquid magnam amet dignissimos eos itaque. Quidem, fuga incidunt.
                        Incidunt, itaque a. Eveniet excepturi facilis asperiores blanditiis accusantium?</p>
                </div>
                <div class="col-7">
                    <div class="d-flex justify-content-end">
                        <img src="{{ asset('image/hero.png') }}" alt="Hero" width="400px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container semuakotak">
        <div class="row">
            <div class="col-4 kotak kotak1">
                <a href="#"><img src="{{ asset('image/lapangan.png') }}" width="50px"></a>
                <a href="#">Lapangan</a>
            </div>
            <div class="col-4 kotak">
                <a href="#"><img src="{{ asset('image/eticket.png') }}" width="50px"></a>
                <a href="#">E-Ticket</a>
            </div>
            <div class="col-4 kotak">
                <a href="#"><img src="{{ asset('image/promo.png') }}" width="50px"></a>
                <a href="#">Promo</a>
            </div>
        </div>
        <div class="row">
            <form>
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
                <a class="mt-1" href="#">Selengkapnya..</a>
            </div>
        </div>
        <div class="row rekomendasi">
            <div class="col-3">
                <a href="#"><img class="rounded mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                        height="380px"></a>
                <a href="#">
                    <h5>Lapangan 1</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
            <div class="col-3">
                <a href="#"><img class="rounded mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                        height="380px"></a>
                <a href="#">
                    <h5>Lapangan 2</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
            <div class="col-3">
                <a href="#"><img class="rounded mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                        height="380px"></a>
                <a href="#">
                    <h5>Lapangan 3</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
            <div class="col-3">
                <a href="#"><img class="rounded mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                        height="380px"></a>
                <a href="#">
                    <h5>Lapangan 4</h5>
                </a>
                <h6>Makassar - <span>1 Lapangan</span></h6>
                <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-2">
                <h4>Promo <span>Lapangan</span></h4>
                <p>Booking sekarang, dapatkan penawaran terbaik.</p>
                <a href="#">Lihat Lebih banyak</a>
            </div>
            <div class="col-10">
                <div class="carousel"
                    data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": true }'>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                    <div class="carousel-cell"></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-4 mb-4">
            <h3>Jenis <span>Olahraga</span></h3>
            <div class="carousel2"
                    data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": false, "pageDots": false, "autoPlay": true }'>
                    <div class="carousel-cell2"></div>
                    <div class="carousel-cell2"></div>
                    <div class="carousel-cell2"></div>
                    <div class="carousel-cell2"></div>
                    <div class="carousel-cell2"></div>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $('.datepicker').datepicker();
    </script>

</body>

</html>
