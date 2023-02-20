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
            @if (auth()->user()->roles == 'super')
                <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                    <div class="card-header">Data Transaksi</div>
                    <a href="{{ url('/super/transaksi/konfigurasi') }}" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3"
                        style="height:40px;">Pembayaran</a>
                </div>
            @else
                <div class="card-header">Data Transaksi</div>
            @endif
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            @if (auth()->user()->roles == 'super')
                                <th>Tempat</th>
                            @endif
                            <th>Nama Rekening</th>
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
                                    <div class="d-flex">
                                        @if (auth()->user()->roles == 'super')
                                            @if ($item->status === 0)
                                                <a href="{{ url('/super/transaksi/konfirmasi/' . $item->id) }}"
                                                    class="btn btn-primary btn-sm icon icon-left rounded-3 me-1"><i
                                                        class="fa fa-check me-sm-1"></i>Konfirmasi</a>
                                            @endif
                                        @endif
                                        <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/transaksi/lihat/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/transaksi/lihat/' . $item->id) }} @endif"
                                            class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                                class="far fa-eye me-sm-1"></i>Lihat</a>
                                        @if (auth()->user()->roles == 'super')
                                            <a onclick="return confirm('Yakin Untuk Membatalkan Transaksi?')"
                                                href="{{ url('/super/transaksi/batal/' . $item->id) }}"
                                                class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                                    class="far fa-times-circle me-sm-1"></i>Batal</a>
                                        @endif
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
