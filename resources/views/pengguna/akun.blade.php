@extends('template.temp')

@section('title', 'Akun - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/akun.css') }}">
    <div class="row">
        <div class="garis col-4 my-5">
            <div class="profile">
                <img src="{{ asset('image/user1.png') }}" alt="regis1" width="120px">
                <p>Amel Krisandaresta <br> <span>@krisandaresta</span></p>
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
                <div class="row">
                    <div class="col-6 mb-4">
                        <label for="nama" class="form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="col-6 mb-4">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-4">
                        <label for="jk" class="form-label">Jenis Kelamin:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="1">Laki - laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-6 mb-4">
                        <label for="phoneNumber" class="form-label">No. Hp:</label>
                        <input type="tel" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp" value="+62">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-4">
                        <label for="bulan" class="form-label">Bulan Lahir:</label>
                        <select class="form-select" aria-label="Default select example">
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
                        </select>
                    </div>
                    <div class="col-3 mb-4">
                        <label for="tahun" class="form-label">Tahun Lahir:</label>
                        <input type="text" class="form-control tahun" id="tahun" name="tahun">
                    </div>
                    <div class="col-3 mb-4">
                        <label for="tanggal" class="form-label">Tanggal Lahir:</label>
                        <input type="text" class="form-control tahun" id="tanggal" name="tanggal">
                    </div>
                </div>
                <h6>Olahraga Favorite:</h6>
                <div class="row favorite">
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/bola.png') }}" width="75px">
                        <label class="form-label icon">Sepak Bola</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/mini soccer.png') }}" width="75px">
                        <label class="form-label icon">Mini Soccer</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/futsal2.png') }}" width="75px">
                        <label class="form-label icon">Futsal</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/bultang.png') }}" width="75px">
                        <label class="form-label icon">BuluTangkis</label>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('image/basket2.png') }}" width="75px">
                        <label class="form-label icon">Bola Basket</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/voli.png') }}" width="75px">
                        <label class="form-label icon">Bola Voli</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/fitnes.png') }}" width="75px">
                        <label class="form-label icon">Fitness</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/tenis2.png') }}" width="75px">
                        <label class="form-label icon">Tennis</label>
                    </div>
                    <div class="col-2 gambar">
                        <img src="{{ asset('image/baseball.png') }}" width="75px">
                        <label class="form-label icon">Baseball</label>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('image/lainnya.png') }}" width="75px">
                        <label class="form-label icon">Olahraga Lainnya</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">SIMPAN PROFIL</button>
            </div>
        </div>
    </div>
@endsection