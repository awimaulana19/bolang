@extends('template.adminTemp')

@section('akun', 'Super')

@section('head', 'User')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data User</div>
                <a href="#" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Tempat</th>
                            <th>Alamat</th>
                            <th>Whatsapp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kakanta Sport Center</td>
                            <td>Antang</td>
                            <td>6282397032649</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                            data-feather="edit"></i>Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                            data-feather="x-circle"></i>Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kakanta Sport Center</td>
                            <td>Hertasning</td>
                            <td>6282397032649</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-info btn-sm icon icon-left me-1 rounded-3"><i
                                            data-feather="edit"></i>Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                            data-feather="x-circle"></i>Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>
@endsection
