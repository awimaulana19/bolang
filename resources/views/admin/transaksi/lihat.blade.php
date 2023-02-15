@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Data Transaksi')

@section('content')
    <div class="row match-height mt-3">
        <div class="col-12">
            <div class="card pb-3">
                <div class="card-header">
                    <h4 class="card-title" style="margin-bottom: -10px;">Data Pemesan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Pemesan</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->nama_pelanggan }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Olahraga</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->olahraga->jenis }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Lapangan</label>
                                    <input type="text" class="form-control"
                                        value="{{ $transaksi->lapangan->nama_lapangan }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->jadwal->tanggal }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jam</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->jadwal->jam }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Akun</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->nama_pelanggan }}"
                                        disabled>
                                    {{-- relasi pengguna --}}
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Hp</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->nomor_hp }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->catatan }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Pembayaran</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->jenis_pembayaran }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Harga Lapangan</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->jadwal->harga }}"
                                        disabled>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Biaya Admin</label>
                                        <input type="text" class="form-control" value="0" disabled>
                                    </div>
                                </div> --}}
                            {{-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control" value="0" disabled>
                                    </div>
                                </div> --}}
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Order ID</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->order_id }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control"
                                        value="{{ $transaksi->status === '0' ? 'Pending' : 'Sukses' }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Transaksi</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->jenis_transaksi }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Waktu Order</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->waktu_order }}"
                                        disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Pembayaran</label>
                                    <input type="text" class="form-control" value="{{ $transaksi->nomor_pembayaran }}"
                                        disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
