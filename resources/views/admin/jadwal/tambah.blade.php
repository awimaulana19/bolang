@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Data Jadwal')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Tambah Data</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="/admin/jenis/tambah" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="olahraga_id" id="basicSelect">
                                                <option selected>Pilih Olahraga</option>
                                                <option value="idfutsal">Futsal</option>
                                                <option value="idms">Mini Soccer</option>
                                                <option value="idbultang">Bulu Tangkis</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Lapangan</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="lapangan_id" id="basicSelect">
                                                <option selected>Pilih Lapangan</option>
                                                <option value="id1">Lapangan 1</option>
                                                <option value="id2">Lapangan 2</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="date" id="tanggal" class="form-control" name="tanggal">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Jam Mulai</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jammulai" id="basicSelect1">
                                                <option selected>Pilih Jam Mulai</option>
                                                <option value="00:00">00:00</option>
                                                <option value="01:00">01:00</option>
                                                <option value="02:00">02:00</option>
                                                <option value="03:00">03:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                                <option value="20:00">20:00</option>
                                                <option value="21:00">21:00</option>
                                                <option value="22:00">22:00</option>
                                                <option value="23:00">23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jam Habis</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jamhabis" id="basicSelect2">
                                                <option selected>Pilih Jam Habis</option>
                                                <option value="00:00">00:00</option>
                                                <option value="01:00">01:00</option>
                                                <option value="02:00">02:00</option>
                                                <option value="03:00">03:00</option>
                                                <option value="04:00">04:00</option>
                                                <option value="05:00">05:00</option>
                                                <option value="06:00">06:00</option>
                                                <option value="07:00">07:00</option>
                                                <option value="08:00">08:00</option>
                                                <option value="09:00">09:00</option>
                                                <option value="10:00">10:00</option>
                                                <option value="11:00">11:00</option>
                                                <option value="12:00">12:00</option>
                                                <option value="13:00">13:00</option>
                                                <option value="14:00">14:00</option>
                                                <option value="15:00">15:00</option>
                                                <option value="16:00">16:00</option>
                                                <option value="17:00">17:00</option>
                                                <option value="18:00">18:00</option>
                                                <option value="19:00">19:00</option>
                                                <option value="20:00">20:00</option>
                                                <option value="21:00">21:00</option>
                                                <option value="22:00">22:00</option>
                                                <option value="23:00">23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="number" name="harga" class="form-control" placeholder="Harga"
                                                aria-label="harga" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1 mt-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
