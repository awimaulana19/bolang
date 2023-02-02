@extends('template.temp')

@section('title', 'Akun - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/akun.css') }}">
    <div class="row">
        <div class="garis col-4 my-5">
            <div class="profile">
                <img src="{{ asset('image/user1.png') }}" alt="regis1" width="120px">
                <p>Amel Krisandaresta <br>@krisandaresta</p>
                <p class="update">Update Photo Profile</p>
                <div class="dropzone" draggable="true">
                    <p>Drop files here to upload <br> or</p>
                    <input type="file" multiple>
                </div>
            </div>
        </div>
        <div class="garis1 col-4 my-5">
            <div class="list">
                <h3>Profile</h3>
                <p>Lengkapi Profile Anda</p>
                <div class="mt-5">
                    <p>Nama Lengkap: <br><input type="text" class="kolom"></p>
                    <p>Jenis Kelamin: <br><select class="pilih" name="jk" id="">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki - laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select></p>
                    <p>Bulan Lahir: <br><select class="pilih" id="birthmonth" name="birthmonth">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12" selected>Desember</option>
                    </select></p>
                </div>
                <div class="form-2">
                    <p>Username: <br><input type="text" class="kolom"></p>
                    <p>No Hp: <br><input type="number" class="kolom"></p>
                    <p>Tahun Lahir: <span>Tanggal Lahir: <br><input type="text" class="thn2"></span> <input type="text" class="thn"></p>
                </div>
                <h6>Olahraga Favorite:</h6>
                <div class="row favorite">
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/bola.png') }}" width="70px">
                        <p>Sepak Bola</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/mini soccer.png') }}" width="70px">
                        <p>Mini Soccer</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/futsal2.png') }}" width="70px">
                        <p>Futsal</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/bultang.png') }}" width="70px">
                        <p>Bulu Tangkis</p>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('image/basket2.png') }}" width="70px">
                        <p>Bola Basket</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/voli.png') }}" width="70px">
                        <p>Bola Voli</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/fitnes.png') }}" width="70px">
                        <p>Fitness</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/tenis2.png') }}" width="70px">
                        <p>Tennis</p>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/baseball.png') }}" width="70px">
                        <p>Baseball</p>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('image/lainnya.png') }}" width="70px">
                        <p>Olahraga Lainnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection