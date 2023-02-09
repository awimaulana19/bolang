@extends('template.temp')

@section('title', 'Transaksi - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">
    <div class="container tabel my-5">
        <h3 class="mb-4 mb-lg-5">Riwayat Transaksi</h3>
        <div class="row justify-content-around">
            <div class="col-4 baris">
                <div class="tombol">
                    <label>Belum Di Bayar/Proses</label>
                </div>
                <div class="riwayat">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda">
                        <a href="#" class="btn">Detail</a>
                    </div>
                </div>
                <div class="riwayat">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda">
                        <a href="#" class="btn">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="tombol">
                    <label>Transaksi Selesai</label>
                </div>
                <div class="riwayat ">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda">
                        <a href="#" class="btn">Detail</a>
                    </div>
                </div>
                <div class="riwayat">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda">
                        <a href="#" class="btn">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection