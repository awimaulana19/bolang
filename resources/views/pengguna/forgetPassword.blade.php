@extends('template.temp')

@section('title', 'Lupa Password - Bolang')

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
                <form action="{{ route('forget.password.post') }}" method="POST">
                    @csrf
                    <input class="form mb-2 w-100" type="text" id="email_address" name="email" placeholder="E-Mail Address">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input class="button-primary mt-2 w-100" type="submit" value="Send Password Reset Link">
                </form>
            </div>
        </div>
    </div>
@endsection
