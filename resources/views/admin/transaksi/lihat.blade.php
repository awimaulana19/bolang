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
                                    <input type="text" class="form-control" value="Awi" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Olahraga</label>
                                    <input type="text" class="form-control" value="Futsal" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Lapangan</label>
                                    <input type="text" class="form-control" value="Lapangan 1" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="text" class="form-control" value="19 Desember 2023" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jam</label>
                                    <input type="text" class="form-control" value="13:00 - 14:00" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Akun</label>
                                    <input type="text" class="form-control" value="Awiajha" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Hp</label>
                                    <input type="text" class="form-control" value="082397032649" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="awimaulana19@gmail.com" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <input type="text" class="form-control" value="Datang 10 menit Lambat" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Pembayaran</label>
                                    <input type="text" class="form-control" value="BRI" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Harga Lapangan</label>
                                    <input type="text" class="form-control" value="Rp. 80.000" disabled>
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
                                    <input type="text" class="form-control" value="7FF55ES21333BGK" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" value="Sukses" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Jenis Transaksi</label>
                                    <input type="text" class="form-control" value="Booking Lapangan" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Waktu Order</label>
                                    <input type="text" class="form-control" value="06 Desember 2023 18:02" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Pembayaran</label>
                                    <input type="text" class="form-control" value="743553432666" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
