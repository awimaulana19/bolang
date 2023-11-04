@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Pengguna Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data User</div>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Pengguna</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Status Verifikasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                @if ($item->email_verified_at)
                                    <td>Terverifikasi</td>
                                @else
                                    <td>Belum Verifikasi</td>
                                @endif
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ '/super/pengguna/edit/' . $item->id }}"
                                            class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                                class="far fa-edit me-sm-1"></i>Edit</a>
                                        <a onclick="return confirm('Yakin Untuk Menghapus?')"
                                            href="{{ '/super/pengguna/delete/' . $item->id }}"
                                            class="btn btn-danger btn-sm icon icon-left rounded-3"><i
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
