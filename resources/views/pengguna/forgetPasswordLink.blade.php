@extends('template.temp')

@section('title', 'Reset Password - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container">
        <div class="row baris-temp mt-5 mb-5">
            <div class="col-lg-6 me-lg-2 col-12 d-flex align-items-center">
                <img class="gambarHero mb-3" src="{{ asset('image/regis1.png') }}" alt="regis1">
            </div>
            <div class="regist col-lg-5 col-12 kata mx-auto d-flex justify-content-center flex-column">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="{{ route('reset.password.post') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <input class="form w-100" type="text" id="email_address" name="email" placeholder="E-Mail Address">
                    @if ($errors->has('email'))
                        <div class="mt-2">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    @endif
                    <input class="form mt-3 w-100" type="password" id="password" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <div class="mt-2">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    @endif
                    <input class="form mt-3 w-100" type="password" id="password-confirm" name="password_confirmation"
                        placeholder="Confirm Password">
                    @if ($errors->has('password_confirmation'))
                        <div class="mt-2">
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        </div>
                    @endif
                    <input class="button-primary mt-3 w-100" type="submit" value="Reset Password">
                </form>
            </div>
        </div>
    </div>
@endsection
