@extends('template.temp')

@section('title', 'Booking - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <div class="row booking mt-5 mb-5">
        <form action="/pesan">
            <img class="herobooking" src="{{ asset('image/herobooking.png') }}" alt="hero">
            <div class="lokasi">
                <div class="icon">
                    <img src="{{ asset('image/lokasi.png') }}" alt="icon">
                </div>
                <div class="info">
                    <h1>Lapangan 1 Kakanta</h1>
                    <h5>Jl. Antang</h5>
                </div>
            </div>
            <div class="isi jadwal mt-5 mb-5">
                <div class="bulan">
                    <div class="daftar">
                        <a href="#"><img src="{{ asset('image/kiri.png') }}" alt="icon"></a>
                    </div>
                    <div class="daftar">
                        <h3>November 2022</h3>
                    </div>
                    <div class="daftar">
                        <a href="#"><img src="{{ asset('image/kanan.png') }}" alt="icon"></a>
                    </div>
                </div>
                <div class="tanggal">
                    <a href="#" class="hari">
                        <h5>Sen</h5>
                        <div class="nomor">
                            <h4>7</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5>Sel</h5>
                        <div class="nomor">
                            <h4>8</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5>Rab</h5>
                        <div class="nomor">
                            <h4>9</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5>Kam</h5>
                        <div class="nomor">
                            <h4>10</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5>Jum</h5>
                        <div class="nomor">
                            <h4>11</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5 class="activehari">Sab</h5>
                        <div class="nomor activetanggal">
                            <h4>12</h4>
                        </div>
                    </a>
                    <a href="#" class="hari">
                        <h5>Min</h5>
                        <div class="nomor">
                            <h4>13</h4>
                        </div>
                    </a>
                </div>
                <hr>
                <div class="jam">
                    <div class="status">
                        <h3>19:00 - 20:00</h3>
                        <div class="jumlah">
                            <h4>Rp. 80.000</h4>
                            <input type="radio" name="jadwal">
                        </div>
                    </div>
                    <div class="status">
                        <h3>19:00 - 20:00</h3>
                        <div class="jumlah">
                            <h4>Rp. 80.000</h4>
                            <input type="radio" name="jadwal">
                        </div>
                    </div>
                    <div class="status statusbooked">
                        <h3 class="jambooked">19:00 - 20:00</h3>
                        <div class="jumlah jumlahbooked">
                            <h4>Booked</h4>
                            {{-- <input type="radio" name="jadwal"> --}}
                        </div>
                    </div>
                    <div class="status">
                        <h3>19:00 - 20:00</h3>
                        <div class="jumlah">
                            <h4>Rp. 80.000</h4>
                            <input type="radio" name="jadwal">
                        </div>
                    </div>
                    <div class="status statusbooked">
                        <h3 class="jambooked">19:00 - 20:00</h3>
                        <div class="jumlah jumlahbooked">
                            <h4>Booked</h4>
                            {{-- <input type="radio" name="jadwal"> --}}
                        </div>
                    </div>
                    <div class="status statusbooked">
                        <h3 class="jambooked">19:00 - 20:00</h3>
                        <div class="jumlah jumlahbooked">
                            <h4>Booked</h4>
                            {{-- <input type="radio" name="jadwal"> --}}
                        </div>
                    </div>
                    <div class="status">
                        <h3>19:00 - 20:00</h3>
                        <div class="jumlah">
                            <h4>Rp. 80.000</h4>
                            <input type="radio" name="jadwal">
                        </div>
                    </div>
                </div>
            </div>
            <div class="isi mb-5">
                <h1>Pembayaran</h1>
                <div class="bayar">
                    <div class="tempat">
                        <h3>Kakanta</h3>
                        <h6>Futsal</h6>
                        <h5>12 Desember 2022 <i class="bi bi-circle-fill ms-1 me-1"></i> 19:00 - 20:00</h5>
                    </div>
                    <div class="harga">
                        <h2>Rp. 80.000</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-5">
                    <button type="submit" class="btn btn-success">Lanjutkan Pembayaran</button>
                </div>
            </div>
        </form>
    </div>
@endsection
