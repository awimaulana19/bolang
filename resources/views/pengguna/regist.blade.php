@extends('template.temp')

@section('title', 'Registrasi - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-6 p-3">
                    <div class="d-flex justify-content-end">
                        <img src="{{ asset('image/regis1.png') }}" alt="regis1" width="550px">
                    </div>
                </div>
                <div class="regist col-5 kata p-2 mx-auto">
                    <form action="/registrasi" method="POST">
                        @csrf
                        <input class="form mb-3 w-100" type="text" name="nama" placeholder="Nama Lengkap">
                        <input class="form mb-3 w-100" type="text" name="username" placeholder="Username">
                        <input class="form mb-3 w-100" type="email" name="email" placeholder="Alamat Email">
                        <input class="form mb-3 w-100" type="password" id="password" placeholder="Masukkan Password">
                        <input class="form mb-3 w-100" type="password" id="confirm-password" name="password"
                            placeholder="Masukkan Ulang Password">
                        <p id="password-mismatch" style="color: red; display: none;">Password tidak cocok</p>
                        <input id="submit-regist" class="button-primary mb-3 w-100" type="submit" value="Registrasi">
                    </form>
                    <p style="text-align: center;">Sudah Punya Akun? &nbsp<a href="/login">LOGIN</a></p>
                </div>
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
