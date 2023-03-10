@extends('template.adminTemp')

@if (auth()->user()->roles == 'admin')
    @section('akun', 'Admin')
@elseif(auth()->user()->roles == 'super')
    @section('akun', 'Super Admin')
@endif

@section('head', 'Jadwal')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}">
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data Jadwal</div>
                <a href="jadwal/tambah" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah
                    Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            @if (auth()->user()->roles == 'super')
                                <th>Tempat</th>
                            @endif
                            <th>Olahraga</th>
                            <th>Lapangan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                            <tr>
                                @if (auth()->user()->roles == 'super')
                                    <td>{{ $item->user->namatempat }}</td>
                                @endif
                                <td>{{ $item->olahraga->jenis }}</td>
                                <td>{{ $item->lapangan->nama_lapangan }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->jam }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jadwal/edit/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jadwal/edit/' . $item->id) }} @endif"
                                            class="btn btn-info btn-sm icon icon-left me-1 rounded-3"><i
                                                class="far fa-edit me-sm-1"></i>Edit</a>
                                        <a onclick="return confirm('Yakin Untuk Menghapus?')"
                                            href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jadwal/delete/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jadwal/delete/' . $item->id) }} @endif"
                                            class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                                class="far fa-times-circle me-sm-1"></i></i>Hapus</a>
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

    <script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    @if (session('gagal'))
        <script>
            Swal.fire({
                icon: 'error',
                title: '{{ session('gagal') }}',
                text: '{{ session('infogagal') }}',
            })
        </script>
    @endif
@endsection
