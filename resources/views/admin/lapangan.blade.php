@extends('template.adminTemp')

@if (auth()->user()->roles == 'admin')
    @section('akun', 'Admin')
@elseif(auth()->user()->roles == 'super')
    @section('akun', 'Super Admin')
@endif

@section('head', 'Daftar Lapangan')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data Lapangan</div>
                <a href="lapangan/tambah" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah
                    Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            @if (auth()->user()->roles == 'super')
                                <th>Tempat</th>
                            @endif
                            <th>Lapangan</th>
                            <th>Olahraga</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lapangan as $item)
                            @php
                                $lowestPrice = PHP_INT_MAX;
                                $highestPrice = 0;
                            @endphp
                            @foreach ($item->jadwal as $jadwal)
                                @php
                                    $lowestPrice = min($lowestPrice, $jadwal['harga']);
                                    $highestPrice = max($highestPrice, $jadwal['harga']);
                                @endphp
                            @endforeach
                            <tr>
                                @if (auth()->user()->roles == 'super')
                                    <td>{{ $item->user->namatempat }}</td>
                                @endif
                                <td>{{ $item->nama_lapangan }}</td>
                                <td>{{ $item->olahraga->jenis }}</td>
                                @if ($item->jadwal->isEmpty())
                                    <td>Rp. 0 - Rp. 0</td>
                                @else
                                    <td>Rp. {{ $lowestPrice }} - Rp. {{ $highestPrice }}</td>
                                @endif
                                <td>
                                    <div class="d-flex">
                                        @if (auth()->user()->roles == 'super')
                                            @if ($item->promo === 0)
                                                <a href="{{ url('/super/lapangan/promo/' . $item->id) }}"
                                                    class="btn btn-primary btn-sm icon icon-left rounded-3 me-1"><i
                                                        class="fa fa-percent me-sm-1"></i>Promo</a>
                                            @elseif ($item->promo === 1)
                                                <a href="{{ url('/super/lapangan/batalpromo/' . $item->id) }}"
                                                    class="btn btn-warning btn-sm icon icon-left rounded-3 me-1"><i
                                                        class="fa fa-percent me-sm-1"></i>Batal</a>
                                            @endif
                                        @endif
                                        <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/lapangan/edit/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/lapangan/edit/' . $item->id) }} @endif"
                                            class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                                class="far fa-edit me-sm-1"></i>Edit</a>
                                        <a onclick="return confirm('Yakin Untuk Menghapus?')"
                                            href="@if (auth()->user()->roles == 'admin') {{ url('/admin/lapangan/delete/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/lapangan/delete/' . $item->id) }} @endif"
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
@endsection
