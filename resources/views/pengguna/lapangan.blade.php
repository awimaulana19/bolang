@extends('template.temp')

@section('title', 'Lapangan - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lapangan.css') }}">
    <h1 class="head">Lapangan Dan Jenis Olahraga</h1>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Futsal</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Mini Soccer</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Bulu Tangkis</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Basket</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Gym</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Tenis</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Tenis Meja</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi mb-5">
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
    </div>
@endsection