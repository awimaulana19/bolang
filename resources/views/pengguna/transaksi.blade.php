@extends('template.temp')

@section('title', 'Transaksi - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">
    <div class="tabel my-5">
        <h3 class="mb-4 mb-lg-5">Riwayat Transaksi</h3>
        <div class="row justify-content-around">
            <div class="tombol col-4">
                <label>Belum Di Bayar/Proses</label>
            </div>
            <div class="tombol col-4">
                <label>Transaksi Selesai</label>
            </div>
        </div>
        <div class="row justify-content-around mt-4">
            <div class="riwayat col-4">
                <p>15 Des 2022 - 17:00 WIB</p>
                <span>NE16 - LAPANGAN KAKANTA </span>
                <p>Ref : NE16-1141111UYD6</p>
                <hr>
                <div class="tanda">
                    <label for="">Menunggu Pembayaran</label>
                </div>
            </div>
            <div class="riwayat col-4">
                <p>15 Des 2022 - 17:00 WIB</p>
                <span>NE16 - LAPANGAN KAKANTA </span>
                <p>Ref : NE16-1141111UYD6</p>
                <hr>
                <div class="tanda">
                    <label class="selesai">Selesai</label>
                </div>
            </div>
            <div class="riwayat col-4 mt-3">
                <p>15 Des 2022 - 17:00 WIB</p>
                <span>NE16 - LAPANGAN KAKANTA </span>
                <p>Ref : NE16-1141111UYD6</p>
                <hr>
                <div class="tanda">
                    <label for="">Menunggu Pembayaran</label>
                </div>
            </div>
            <div class="riwayat col-4 mt-3">
                <p>15 Des 2022 - 17:00 WIB</p>
                <span>NE16 - LAPANGAN KAKANTA </span>
                <p>Ref : NE16-1141111UYD6</p>
                <hr>
                <div class="tanda">
                    <label class="selesai">Selesai</label>
                </div>
            </div>
        </div>
    </div>
@endsection