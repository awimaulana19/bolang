@extends('template.temp')

@section('title', 'Bolang | Registrasi')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container-fluid">
            <div class="container">
                <div class="row baris-temp mt-5 mb-5">
                    <div class="col-6 p-3">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('image/regis1.png') }}" alt="regis1" width="550px">
                        </div>
                    </div>
                    <div class="regist col-5 kata p-2 mx-auto">
                        <input class="form mb-3 w-100" type="text" value="" placeholder="Nama Lengkap">
                        <input class="form mb-3 w-100" type="text" value="" placeholder="Username">
                        <input class="form mb-3 w-100" type="email" value="" placeholder="Alamat Email">
                        <input class="form mb-3 w-100" type="password" value="" placeholder="Masukkan Password">
                        <input class="form mb-3 w-100" type="password" value="" placeholder="Masukkan Ulang Password">
                        <input class="button-primary mb-3 w-100" type="submit" value="Registrasi">
                        <p style="text-align: center;">Sudah Punya Akun? &nbsp<a href="/login">LOGIN</a></p>
                    </div>
                    
                </div>
            </div>
    </div>
@endsection