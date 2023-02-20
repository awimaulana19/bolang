@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Data Admin')

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
                        <form enctype="multipart/form-data" class="form form-horizontal" action="/super/user/tambah"
                            method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Nama Pemilik</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Nama Tempat</label>
                                        <input type="text" class="form-control" name="namatempat">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Username</label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Alamat</label>
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Email</label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Whatsapp</label>
                                        <input type="text" class="form-control" name="whatsapp">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Instagram</label>
                                        <input type="text" class="form-control" name="instagram">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Lokasi Maps</label>
                                        <input type="text" class="form-control" name="lokasi">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Link Maps</label>
                                        <input type="text" class="form-control" name="maps">
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
