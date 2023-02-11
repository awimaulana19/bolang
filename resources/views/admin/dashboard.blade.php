@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Dashboard')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12 col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h4>Profile Pemilik</h4>
            </div>
            <div class="row ms-3 pb-3">
                <div class="col-lg-4 col-md-12 align-self-center">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <p class="fw-bold">
                            Awi
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <p class="fw-bold">
                            awimaulana19
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Whatsapp</label>
                        <p class="fw-bold">
                            6282397032649
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 align-self-center">
                    <div class="mb-3">
                        <label class="form-label">Nama Tempat</label>
                        <p class="fw-bold">
                            Kakanta
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <p class="fw-bold">
                            Antang
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <p class="fw-bold">
                            kakanta@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">
        <div class="card border border-success border-1">
            <div class="card-header d-flex ms-auto me-auto">
                <h4>Jumlah Olahraga</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <div class="me-3">
                    <i class="fas fa-futbol fa-3x"></i>
                </div>
                <div class="me-3">
                    <h1>=</h1>
                </div>
                <div>
                    <h1>6</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 mb-4">
        <div class="card border border-success border-1">
            <div class="card-header d-flex ms-auto me-auto">
                <h4>Jumlah Lapangan</h4>
            </div>
            <div class="d-flex justify-content-center align-items-center mb-3">
                <div class="me-3">
                    <i class="fas fa-running fa-3x"></i>
                </div>
                <div class="me-3">
                    <h1>=</h1>
                </div>
                <div>
                    <h1>6</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12">
        <div class="card border border-success border-1">
            <div class="card-header d-flex ms-auto me-auto">
                <h4>Jumlah Transaksi</h4>
            </div>

            <div class="d-flex justify-content-center align-items-center mb-3">
                <div class="me-3">
                    <i class="fas fa-file-invoice fa-3x"></i>
                </div>
                <div class="me-3">
                    <h1>=</h1>
                </div>
                <div>
                    <h1>5</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection