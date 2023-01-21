@extends('template.temp')

@section('title', 'Bolang | Login')

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
                        <div class="regist col-5 kata p-5 mx-auto">
                            <input class="form mb-3 w-100" type="email" value="" placeholder="Username/Email">
                            <input class="form mb-3 w-100" type="password" value="" placeholder="Password">
                            <input class="button-primary mb-3 w-100" type="submit" value="Login">
                            <p style="text-align: center;">Belum Punya Akun? &nbsp<a href="/registrasi">REGISTRASI DI SINI</a></p>
                        </div>
                        
                    </div>
                </div>
        </div>
@endsection