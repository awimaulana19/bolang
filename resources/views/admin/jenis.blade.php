@extends('template.adminTemp')

@if (auth()->user()->roles == 'admin')
    @section('akun', 'Admin')
@elseif(auth()->user()->roles == 'super')
    @section('akun', 'Super Admin')
@endif

@section('head', 'Jenis Olahraga')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}" />
    <section class="section mt-3">
        <div class="card">
            <div class="d-flex justify-content-between" style="margin-bottom:-20px;">
                <div class="card-header">Data Olahraga</div>
                <a href="jenis/tambah" class="btn btn-primary mt-lg-4 me-lg-5 me-4 mt-3" style="height:40px;">Tambah Data</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Tempat</th>
                            <th>Olahraga</th>
                            <th>Whatsapp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($olahraga as $item)
                            <tr>
                                <td>{{ $item->user->namatempat }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->user->whatsapp }}</td>
                                <td>
                                    <div class="d-flex">
                                        @if (auth()->user()->roles == 'super')
                                            @if ($item->rekomendasi === 0)
                                                <a href="{{ url('/super/jenis/rekomendasi/' . $item->id) }}"
                                                    class="btn btn-primary btn-sm icon icon-left rounded-3 me-1"><i
                                                        class="far fa-thumbs-up me-sm-1"></i>Rekomendasi</a>
                                            @elseif ($item->rekomendasi === 1)
                                                <a href="{{ url('/super/jenis/batalrekomendasi/' . $item->id) }}"
                                                    class="btn btn-warning btn-sm icon icon-left rounded-3 me-1"><i
                                                        class="far fa-thumbs-up me-sm-1"></i>Batal</a>
                                            @endif
                                        @endif
                                        <a href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jenis/edit/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jenis/edit/' . $item->id) }} @endif"
                                            class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                                class="far fa-edit me-sm-1"></i>Edit</a>
                                        <a onclick="return confirm('Yakin Untuk Menghapus?')"
                                            href="@if (auth()->user()->roles == 'admin') {{ url('/admin/jenis/delete/' . $item->id) }} @elseif(auth()->user()->roles == 'super') {{ url('/super/jenis/delete/' . $item->id) }} @endif"
                                            class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                                class="far fa-times-circle me-sm-1"></i>Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            {{-- <img src="{{ asset('storage/'.$item->foto) }}" alt="" width="auto" height="100px"> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>
@endsection
