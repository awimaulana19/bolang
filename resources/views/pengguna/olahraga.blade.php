@extends('template.temp')

@section('title', 'Bolang | Olahraga - ')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lapangan.css') }}">
    <h1 class="head">Lapangan <span class="jenisnya">Futsal</span></h1>
    <div class="row rekomendasi mt-5">
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 1</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/pilih"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/pilih">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
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