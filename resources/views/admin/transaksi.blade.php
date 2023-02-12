@extends('template.adminTemp')

@section('akun', 'Admin')

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
                            <th>Nama Pemesan</th>
                            <th>No Hp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Adam</td>
                            <td>6282397032649</td>
                            <td>adam@gmail.com</td>
                            <td>
                                <a href="transaksi/lihat" class="btn btn-info btn-sm icon icon-left rounded-3"><i
                                    data-feather="eye"></i>Lihat</a>
                                {{-- <a href="#" class="btn btn-danger btn-sm icon icon-left rounded-3"><i
                                        data-feather="x-circle"></i>Hapus</a> --}}
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
