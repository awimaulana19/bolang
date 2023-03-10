@extends('template.temp')

@section('title', 'Registrasi - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6 me-lg-2 col-12 d-flex align-items-center">
                <img class="gambarHero" src="{{ asset('image/regis1.png') }}" alt="regis1">
            </div>
            <div class="regist col-lg-5 col-12 kata mt-5 mx-auto">
                <form action="/registrasi" method="POST">
                    @csrf
                    <input class="form mb-3 w-100" type="text" name="nama" placeholder="Nama Lengkap">
                    @if ($errors->has('nama'))
                        <div class="input" style="margin-top: -10px">
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        </div>
                    @endif
                    <input class="form mb-3 w-100" type="text" name="username" placeholder="Username">
                    @if ($errors->has('username'))
                        <div class="input" style="margin-top: -10px">
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        </div>
                    @endif
                    <input class="form mb-3 w-100" type="email" name="email" placeholder="Alamat Email">
                    @if ($errors->has('email'))
                        <div class="input" style="margin-top: -10px">
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                    @endif
                    <input class="form mb-3 w-100" type="password" id="password" placeholder="Masukkan Password">
                    @if ($errors->has('password'))
                        <div class="input" style="margin-top: -10px">
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>
                    @endif
                    <input class="form mb-3 w-100" type="password" id="confirm-password" name="password"
                        placeholder="Masukkan Ulang Password">
                    <p id="password-mismatch" style="color: red; margin-top: -10px; display: none;">Password tidak cocok</p>
                    <input id="submit-regist" class="button-primary mb-3 w-100" type="submit" value="Registrasi">
                </form>
                <p style="text-align: center;">Sudah Punya Akun? &nbsp<a href="/login">LOGIN</a></p>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById("password");
        const confirmPasswordInput = document.getElementById("confirm-password");
        const registerButton = document.getElementById("submit-regist");
        const passwordMismatch = document.getElementById("password-mismatch");

        confirmPasswordInput.addEventListener("input", function() {
            if (confirmPasswordInput.value === passwordInput.value) {
                registerButton.disabled = false;
                passwordMismatch.style.display = "none";
            } else {
                registerButton.disabled = true;
                passwordMismatch.style.display = "block";
            }
        });
    </script>
@endsection
