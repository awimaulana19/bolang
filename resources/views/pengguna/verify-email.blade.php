@extends('template.temp')

@section('title', 'Verifikasi Email - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container">
        <div class="row baris-temp mt-5 mb-5">
            <div class="col-lg-6 me-lg-2 col-12 d-flex align-items-center">
                <img class="gambarHero mb-3" src="{{ asset('image/regis1.png') }}" alt="regis1">
            </div>
            <div class="regist col-lg-5 col-12 kata mx-auto d-flex justify-content-center flex-column">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h5 class="text-center mb-4">Email Verifikasi Telah Dikirim, Silahkan Cek Email Anda, Jika Email Belum Masuk Silahkan Klik Tombol Di Bawah</h5>
                <form action="/email/verification-notification" method="POST">
                    @csrf
                    <input class="button-primary mb-3 w-100" type="submit" value="Kirim Ulang">
                </form>
            </div>
        </div>
    </div>
@endsection

