@extends('template.temp')

@section('title', 'Bayar - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pemesanan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <div class="pelanggan bayar mt-5">
        <h1>Pembayaran</h1>
        <div class="tabel">
            <div class="pembayaran">
                <div class="dat data">
                    <h4>Order ID</h4>
                    <h5>FB-0031-U4O7BPEL0DH8</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Status Pembayaran</h4>
                    <div class="status">
                        <span>PENDING</span>
                    </div>
                </div>
                <div class="dat data">
                    <h4>Nama Customer</h4>
                    <h5>Awi Maulana</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Jenis Transaksi</h4>
                    <h5>Booking Lapangan</h5>
                </div>
                <div class="dat data">
                    <h4>Tanggal Order</h4>
                    <h5>01 Februari 2023 16:41</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Batas Waktu Pembayaran</h4>
                    <h5>01 Februari 2023 17:41</h5>
                </div>
                <div class="dat data">
                    <h4>Nomor</h4>
                    <h5>733235123654534</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Metode Pembayaran</h4>
                    <h5>BRI</h5>
                </div>
            </div>
            <hr>
            <div class="rincian rincibayar">
                <h4>Kakanta Sport Center</h4>
                <h6>Senin, 12 April 2023 <i class="bi bi-circle-fill ms-1 me-1"></i> 08:00 - 09:00</h6>
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
            <div class="d-flex justify-content-center mt-5">
                <a href="/transaksi" class="btn btn-bayar">SUDAH BAYAR</a>
            </div>
        </div>
    </div>
@endsection
