@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Data Lapangan')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Edit Data</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="/admin/lapangan/edit" method="POST">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nama Lapangan</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="nama" class="form-control" name="nama" placeholder="Nama Lapangan">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2">
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
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="file" id="foto" class="form-control" name="foto">
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
