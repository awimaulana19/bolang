@extends('template.adminTemp')

@if (auth()->user()->roles == 'admin')
    @section('akun', 'Admin')
@elseif(auth()->user()->roles == 'super')
    @section('akun', 'Super Admin')
@endif

@section('head', 'Transaksi')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="card-header">Data Transaksi</div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            @if (auth()->user()->roles == 'super')
                                <th>Tempat</th>
                            @endif
                            <th>Nama Pemesan</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <tr>
                                @if (auth()->user()->roles == 'super')
                                    <td>{{ $item->user->namatempat }}</td>
                                @endif
                                <td>{{ $item->nama_pelanggan }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/transaksi/lihat/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/transaksi/lihat/' . $item->id) }} @endif" class="btn btn-info btn-sm icon icon-left rounded-3"><i class="far fa-eye me-sm-1"></i>Lihat</a>
                                    {{-- <a href="#" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                        data-feather="x-circle"></i>Hapus</a> --}}
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
