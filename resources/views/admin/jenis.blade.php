@extends('template.adminTemp')

@section('akun', 'Admin')

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
                            <th>Nama Tempat</th>
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
                                    <a href="{{url('/admin/jenis/edit/'.$item->id)}}" class="btn btn-info btn-sm icon icon-left rounded-3 me-1"><i
                                            data-feather="edit"></i>Edit</a>
                                    <a onclick="return confirm('Yakin Untuk Menghapus?')" href="{{url('/admin/jenis/delete/'.$item->id)}}" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                            data-feather="x-circle"></i>Hapus</a>
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
