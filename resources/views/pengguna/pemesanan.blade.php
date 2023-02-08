@extends('template.temp')

@section('title', 'Pesan - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pemesanan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <form class="pelanggan mt-5" action="/bayar">
        <h1>Pemesanan</h1>
        <div class="tabel">
            <h3 class="mb-4 mb-lg-5">Detail Pelanggan</h3>
            <div class="row baris1">
                <div class="col-6 mb-4">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input required type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-6 mb-4 akhir">
                    <label for="nomor" class="form-label">No. Hp Pelanggan</label>
                    <input required type="text" class="form-control" id="nomor" name="nomor">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" name="catatan" id="catatan" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="tabel pilih">
            <h3 class="mb-4 mb-lg-5">Pilih Jenis Pembayaran</h3>
            <select class="form-select mb-3">
                <option selected>Payment</option>
                <option value="1">BRI</option>
                <option value="2">BNI</option>
                <option value="3">BCA</option>
                <option value="4">MANDIRI</option>
                <option value="5">GOPAY</option>
                <option value="6">DANA</option>
                <option value="7">OVO</option>
                <option value="8">LINKAJA</option>
            </select>
            <div class="pembayaran">
                <div class="gambar">
                    <img src="{{ asset('image/bri.png') }}" alt="bri">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/bni.png') }}" alt="bni">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/bca.png') }}" alt="bca">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/mandiri.png') }}" alt="mandiri">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/gopay.png') }}" alt="gopay">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/dana.png') }}" alt="dana">
                </div>
                <div class="gambar">
                    <img src="{{ asset('image/ovo.png') }}" alt="ovo">
                </div>
                <div class="gambar">
                    <img class="linkaja" src="{{ asset('image/linkaja.png') }}" alt="linkaja">
                </div>
            </div>
        </div>
        <div class="tabel rincian">
            <div class="tombol mb-4">
                <h3 class="pt-2 pb-2">Rincian Pesanan</h3>
            </div>
            <h4>Kakanta Sport Center</h4>
            <h6>Sabtu, 12 Desember 2022 <i class="bi bi-circle-fill ms-1 me-1"></i> 19:00 - 20:00</h6>
            <div class="harga mt-4">
                <span>Harga Lapangan:</span><span>Rp. 80.000</span>
            </div>
            <hr>
            <div class="harga">
                <span>Biaya Admin:</span><span>Rp. 0</span>
            </div>
            <hr>
            <div class="harga">
                <span>Total Bayar:</span><span>Rp. 80.000</span>
            </div>
        </div>
        <div class="d-flex justify-content-center mb-5">
            <button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
        </div>
    </form>
@endsection
