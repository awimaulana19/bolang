@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Admin Lapangan')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data User</div>
                <a href="user/tambah" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah Data</a>
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
                        @foreach ($user as $item)     
                        <tr>
                            <td>{{ $item->namatempat }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->whatsapp }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ '/super/user/edit/'.$item->id }}" class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                        class="far fa-edit me-sm-1"></i>Edit</a>
                                    <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{ '/super/user/delete/'.$item->id }}" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                        class="far fa-times-circle me-sm-1"></i>Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>
@endsection
