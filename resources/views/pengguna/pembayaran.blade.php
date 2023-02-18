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
                    <h5>{{ $transaksi->order_id }}</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Status Pembayaran</h4>
                    <div class="status {{ $transaksi->status === 0 ? 'pending' : '' }}">
                        @if ($transaksi->status === 0)
                            <span>PENDING</span>
                        @else
                            <span>SUKSES</span>
                        @endif
                    </div>
                </div>
                <div class="dat data">
                    <h4>Nama Customer</h4>
                    <h5>{{ $transaksi->nama_pelanggan }}</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Jenis Transaksi</h4>
                    <h5>{{ $transaksi->jenis_transaksi }}</h5>
                </div>
                <div class="dat data">
                    <h4>Tanggal Order</h4>
                    <h5>{{ $transaksi->waktu_order }}</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Batas Waktu Pembayaran</h4>
                    <h5>{{ $transaksi->batas_pembayaran }}</h5>
                </div>
                <div class="dat data">
                    <h4>Nomor</h4>
                    <h5>{{ $transaksi->nomor_pembayaran }}</h5>
                </div>
                <div class="dat datakanan">
                    <h4>Metode Pembayaran</h4>
                    <h5>{{ $transaksi->jenis_pembayaran }}</h5>
                </div>
            </div>
            <hr>
            <div class="rincian rincibayar">
                <h4>{{ $transaksi->user->namatempat }}</h4>
                <h6>{{ $transaksi->jadwal->tanggal }} <i class="bi bi-circle-fill ms-1 me-1"></i>
                    {{ $transaksi->jadwal->jam }}</h6>
                <div class="harga mt-4">
                    <span>Harga Lapangan:</span><span>Rp. {{ $transaksi->harga_lapangan }}</span>
                </div>
                <hr>
                <div class="harga">
                    <span>Biaya Admin:</span><span>Rp. {{ $transaksi->biaya_admin }}</span>
                </div>
                <hr>
                <div class="harga">
                    <span>Total Bayar:</span><span>Rp. {{ $transaksi->total }}</span>
                </div>
            </div>
            @if ($transaksi->status === 0)
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ '/konfirmasi/' . $transaksi->id }}" class="btn btn-bayar">SUDAH BAYAR</a>
                </div>
            @endif
        </div>
    </div>
@endsection
