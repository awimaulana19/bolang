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
                    <div class="card-title" style="margin-bottom: -10px;">Edit Data</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal"
                            action="{{ '/super/pengguna/edit/' . $user->id }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Nama Pengguna</label>
                                        <input type="text" class="form-control" name="nama"
                                            value="{{ $user->nama }}" disabled>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            value="{{ $user->username }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">No. HP</label>
                                        <input type="text" class="form-control" name="whatsapp"
                                            value="{{ $user->whatsapp }}" disabled>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Jenis Kelamin</label>
                                        <input type="text" class="form-control" name="jenis_kelamin"
                                            value="{{ $user->jenis_kelamin }}" disabled>
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">Tanggal Lahir</label>
                                        <input type="text" class="form-control" value="{{ $user->lokasi }}" disabled>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="mb-1">Foto</label>
                                        <button type="button" class="btn btn-outline-primary form-control"
                                            data-bs-toggle="modal" data-bs-target="#foto">
                                            Lihat Foto
                                        </button>
                                        <div class="modal fade" id="foto" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Foto</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $user->foto) }}" width="100%">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
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
