@extends('template.temp')

@section('title', 'Akun - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/akun.css') }}">
    <div class="row">
        <div class="garis col-4 my-5">
            <div class="profile">
                @if ($akun->foto != null)
                    <img class="mt-3" src="{{ asset('storage/' . $akun->foto) }}" alt="profil" width="200px" style="max-height: 300px;">
                @else
                    <img class="mt-3" src="{{ asset('image/user1.png') }}" alt="profil" width="120px">
                @endif
                <p>{{ $akun->nama }} <br> <span>{{ $akun->email }}</span></p>
                <p class="update">Update Photo Profile</p>
                <form enctype="multipart/form-data" id="formFoto" action="{{ '/akun/foto/' . $akun->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="fotoLama" id="fotoLama" value="{{ $akun->foto }}">
                    <input type="file" id="fileInput" name="foto" style="display:none" />
                    <label class="dropzone" id="dropArea" for="fileInput">Drop files here to upload</label>
                </form>
            </div>
        </div>
        <div class="garis1 col-4 my-5">
            <div class="list">
                <h3>Profile</h3>
                <p>Lengkapi Profile Anda</p>
                <form id="formProfile" action="{{ '/akun/' . $akun->id }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="nama" class="form-label">Nama Lengkap:</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                value="{{ $akun->nama }}">
                        </div>
                        <div class="col-6 mb-4">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ $akun->username }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="jk" class="form-label">Jenis Kelamin:</label>
                            <select class="form-select" id="jk" name="jenis_kelamin"
                                aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki - Laki" {{ $akun->jenis_kelamin === 'Laki - Laki' ? 'Selected' : '' }}>
                                    Laki - laki</option>
                                <option value="Perempuan" {{ $akun->jenis_kelamin === 'Perempuan' ? 'Selected' : '' }}>
                                    Perempuan</option>
                            </select>
                        </div>
                        <div class="col-6 mb-4">
                            <label for="phoneNumber" class="form-label">No. Hp:</label>
                            <input type="tel" class="form-control" id="phoneNumber" aria-describedby="phoneNumberHelp"
                                name="whatsapp" value="{{ $akun->whatsapp }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-4">
                            <label for="bulan" class="form-label">Bulan Lahir:</label>
                            <select id="bulan" name="bulan_lahir" class="form-select"
                                aria-label="Default select example">
                                <option selected>Pilih Bulan</option>
                                <option value="01" {{ $akun->bulan_lahir === '01' ? 'Selected' : '' }}>Januari
                                </option>
                                <option value="02" {{ $akun->bulan_lahir === '02' ? 'Selected' : '' }}>Februari
                                </option>
                                <option value="03" {{ $akun->bulan_lahir === '03' ? 'Selected' : '' }}>Maret</option>
                                <option value="04" {{ $akun->bulan_lahir === '04' ? 'Selected' : '' }}>April</option>
                                <option value="05" {{ $akun->bulan_lahir === '05' ? 'Selected' : '' }}>Mei</option>
                                <option value="06" {{ $akun->bulan_lahir === '06' ? 'Selected' : '' }}>Juni</option>
                                <option value="07" {{ $akun->bulan_lahir === '07' ? 'Selected' : '' }}>Juli</option>
                                <option value="08" {{ $akun->bulan_lahir === '08' ? 'Selected' : '' }}>Agustus
                                </option>
                                <option value="09" {{ $akun->bulan_lahir === '09' ? 'Selected' : '' }}>September
                                </option>
                                <option value="10" {{ $akun->bulan_lahir === '10' ? 'Selected' : '' }}>Oktober
                                </option>
                                <option value="11" {{ $akun->bulan_lahir === '11' ? 'Selected' : '' }}>November
                                </option>
                                <option value="12" {{ $akun->bulan_lahir === '12' ? 'Selected' : '' }}>Desember
                                </option>
                            </select>
                        </div>
                        <div class="col-3 mb-4">
                            <label for="tahun" class="form-label">Tahun Lahir:</label>
                            <input type="text" class="form-control tahun" id="tahun" name="tahun_lahir"
                                value="{{ $akun->tahun_lahir }}">
                        </div>
                        <div class="col-3 mb-4">
                            <label for="tanggal" class="form-label">Tanggal Lahir:</label>
                            <input type="text" class="form-control tahun" id="tanggal" name="tanggal_lahir"
                                value="{{ $akun->tanggal_lahir }}">
                        </div>
                    </div>
                    <h6 class="mb-3">Olahraga Favorite:</h6>
                    <div class="row favorite">
                        <div class="col-2 gambar">
                            <label for="pilihan1">
                                <input type="checkbox" id="pilihan1" name="sepak_bola" @checked($akun->sepak_bola == true)>
                                <img src="{{ asset('image/bola.png') }}" alt="Pilihan 1">
                            </label>
                            <label class="form-label icon">Sepak Bola</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan2">
                                <input type="checkbox" id="pilihan2" name="mini_soccer" @checked($akun->mini_soccer == true)>
                                <img src="{{ asset('image/mini soccer.png') }}" alt="Pilihan 2">
                            </label>
                            <label class="form-label icon">Mini Soccer</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan3">
                                <input type="checkbox" id="pilihan3" name="futsal" @checked($akun->futsal == true)>
                                <img src="{{ asset('image/futsal2.png') }}" alt="Pilihan 3">
                            </label>
                            <label class="form-label icon">Futsal</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan4">
                                <input type="checkbox" id="pilihan4" name="bulu_tangkis" @checked($akun->bulu_tangkis == true)>
                                <img src="{{ asset('image/bultang.png') }}" alt="Pilihan 4">
                            </label>
                            <label class="form-label icon">BuluTangkis</label>
                        </div>
                        <div class="col-2">
                            <label for="pilihan5">
                                <input type="checkbox" id="pilihan5" name="basket" @checked($akun->basket == true)>
                                <img src="{{ asset('image/basket2.png') }}" alt="Pilihan 5">
                            </label>
                            <label class="form-label icon">Bola Basket</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan6">
                                <input type="checkbox" id="pilihan6" name="voli" @checked($akun->voli == true)>
                                <img src="{{ asset('image/voli.png') }}" alt="Pilihan 6">
                            </label>
                            <label class="form-label icon">Bola Voli</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan7">
                                <input type="checkbox" id="pilihan7" name="fitnes" @checked($akun->fitnes == true)>
                                <img src="{{ asset('image/fitnes.png') }}" alt="Pilihan 7">
                            </label>
                            <label class="form-label icon">Fitness</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan8">
                                <input type="checkbox" id="pilihan8" name="tenis" @checked($akun->tenis == true)>
                                <img src="{{ asset('image/tenis2.png') }}" alt="Pilihan 8">
                            </label>
                            <label class="form-label icon">Tennis</label>
                        </div>
                        <div class="col-2 gambar">
                            <label for="pilihan9">
                                <input type="checkbox" id="pilihan9" name="baseball" @checked($akun->baseball == true)>
                                <img src="{{ asset('image/baseball.png') }}" alt="Pilihan 9">
                            </label>
                            <label class="form-label icon">Baseball</label>
                        </div>
                        <div class="col-2">
                            <label for="pilihan10">
                                <input type="checkbox" id="pilihan10" name="lainnya" @checked($akun->lainnya == true)>
                                <img src="{{ asset('image/lainnya.png') }}" alt="Pilihan 10">
                            </label>
                            <label class="form-label icon">Olahraga Lainnya</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">SIMPAN PROFIL</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const dropArea = document.getElementById("dropArea");
        const fileInput = document.getElementById("fileInput");
        const form = document.getElementById("formFoto");

        dropArea.addEventListener("dragover", function(e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.style.backgroundColor = "#eee";
        });

        dropArea.addEventListener("dragleave", function(e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.style.backgroundColor = "";
        });

        fileInput.addEventListener("change", function(e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.style.backgroundColor = "";

            form.submit();
        });

        dropArea.addEventListener("drop", function(e) {
            e.preventDefault();
            e.stopPropagation();
            fileInput.files = e.dataTransfer.files;
            dropArea.style.backgroundColor = "";
            form.submit();
        });
    </script>
@endsection
