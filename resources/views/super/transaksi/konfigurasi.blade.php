@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Pembayaran')

@section('content')
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Konfigurasi Nomor Pembayaran</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="{{ '/super/transaksi/konfigurasi/'.$konfigurasi->id }}"
                            method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">BRI</label>
                                        <input type="text" class="form-control" name="bri" value="{{ $konfigurasi->bri }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">BNI</label>
                                        <input type="text" class="form-control" name="bni" value="{{ $konfigurasi->bni }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">BCA</label>
                                        <input type="text" class="form-control" name="bca" value="{{ $konfigurasi->bca }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">MANDIRI</label>
                                        <input type="text" class="form-control" name="mandiri" value="{{ $konfigurasi->mandiri }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">GOPAY</label>
                                        <input type="text" class="form-control" name="gopay" value="{{ $konfigurasi->gopay }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">DANA</label>
                                        <input type="text" class="form-control" name="dana" value="{{ $konfigurasi->dana }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">OVO</label>
                                        <input type="text" class="form-control" name="ovo" value="{{ $konfigurasi->ovo }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-3">
                                        <label class="mb-1">LINKAJA</label>
                                        <input type="text" class="form-control" name="linkaja" value="{{ $konfigurasi->linkaja }}">
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
