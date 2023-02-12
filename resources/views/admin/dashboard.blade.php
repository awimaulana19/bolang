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
                            {{ auth()->user()->nama }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <p class="fw-bold">
                            {{ auth()->user()->username }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Whatsapp</label>
                        <p class="fw-bold">
                            {{ auth()->user()->whatsapp }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 align-self-center">
                    <div class="mb-3">
                        <label class="form-label">Nama Tempat</label>
                        <p class="fw-bold">
                            {{ auth()->user()->namatempat }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <p class="fw-bold">
                            {{ auth()->user()->alamat }}
                        </p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <p class="fw-bold">
                            {{ auth()->user()->email }}
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
                    <h1>{{ $user->olahraga->count() }}</h1>
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
                    <h1>{{ $user->lapangan->count() }}</h1>
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
                    <h1>{{ $user->transaksi->count() }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection