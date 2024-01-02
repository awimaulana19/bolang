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
    <script src="https://cdn.tailwindcss.com"></script>
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data Jadwal</div>
                <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jadwal/tambah') }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jadwal/tambah') }} @endif" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah
                    Data</a>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <input type="text" id="search" placeholder="Search"
                        style="border: rgb(51, 51, 51) solid 0.5px; padding:7px; border-radius:5px;">
                </div>
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
                                        @if ($item->status === 0)
                                            <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jadwal/booked/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jadwal/booked/' . $item->id) }} @endif"
                                                class="btn btn-primary btn-sm icon icon-left rounded-3 me-1"><i
                                                    class="fa fa-check me-sm-1"></i>Booking</a>
                                        @elseif ($item->status === 1)
                                            <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jadwal/booked/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jadwal/booked/' . $item->id) }} @endif"
                                                class="btn btn-warning btn-sm icon icon-left rounded-3 me-1"><i
                                                    class="fa fa-check me-sm-1"></i>Batal</a>
                                        @endif
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
                @if ($jadwal->hasPages())
                    <div class="mb-3" style="background: white; padding: 20px;">
                        {{ $jadwal->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function(event) {
                if (event.key === 'Enter') {
                    var searchValue = $(this).val();
                    @if (auth()->user()->roles == 'super')
                        var searchURL = "/super/jadwal/" + searchValue;
                    @else
                        var searchURL = "/admin/jadwal/" + searchValue;
                    @endif
                    window.location.href = searchURL;
                }
            });
        });
    </script>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script>
        let dataTable = new simpleDatatables.DataTable(document.getElementById("table1"), {
            paging: false,
            searchable: false
        });
    </script>

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
