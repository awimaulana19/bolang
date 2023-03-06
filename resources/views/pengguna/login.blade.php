@extends('template.temp')

@section('title', 'Login - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container">
        <div class="row baris-temp mt-5 mb-5">
            <div class="col-lg-6 me-lg-2 col-12 d-flex align-items-center">
                <img class="gambarHero" src="{{ asset('image/regis1.png') }}" alt="regis1">
            </div>
            <div class="regist col-lg-5 col-12 kata mt-5 mx-auto">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('pesan-danger'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ session('pesan-danger') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <input class="form mb-3 w-100" type="text" name="useremail" placeholder="Username/Email">
                    <input class="form mb-3 w-100" type="password" name="password" placeholder="Password">
                    <p style="text-align: end;">Lupa Password? &nbsp<a href="{{ route('forget.password.get') }}">Klik Disini</a>
                    <input class="button-primary mt-2 mb-2 w-100" type="submit" value="Login">
                </form>
                <p style="text-align: center;">Belum Punya Akun? &nbsp<a href="/registrasi">REGISTRASI DI SINI</a>
                </p>
            </div>
        </div>
    </div>
@endsection
