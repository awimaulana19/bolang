@extends('template.temp')

@section('title', 'Pesan - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pemesanan.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <form id="order_form" class="pelanggan mt-5" action="/pesan" method="POST">
        @csrf
        <h1>Pemesanan</h1>
        <div class="tabel">
            @if ($errors->has('jadwal_id'))
                <div class="input" style="margin-bottom: 15px">
                    <p class="text-center text-danger">Jadwal Sudah Di Booking</p>
                </div>
            @endif
            <h3 class="mb-4 mb-lg-5">Detail Pelanggan</h3>
            <div class="row baris1">
                <div class="col-6 mb-4">
                    <label for="nama_pelanggan" class="form-label">Nama Rekening / Akun</label>
                    <input required type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan">
                </div>
                <div class="col-6 mb-4 akhir">
                    <label for="nomor_hp" class="form-label">No. Hp Pelanggan</label>
                    <input required type="text" class="form-control" id="nomor_hp" name="nomor_hp">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input required type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" name="catatan" id="catatan" rows="1"></textarea>
                </div>
            </div>
        </div>
        <div class="tabel pilih">
            <h3 class="mb-4 mb-lg-5">Pilih Jenis Pembayaran</h3>
            <select required class="form-select mb-3" name="jenis_pembayaran" id="jenis_pembayaran">
                <option selected>Payment</option>
                @if (!$pembayaran->bri == null)
                    <option value="BRI">BRI</option>
                @endif
                @if (!$pembayaran->bni == null)
                    <option value="BNI">BNI</option>
                @endif
                @if (!$pembayaran->bca == null)
                    <option value="BCA">BCA</option>
                @endif
                @if (!$pembayaran->mandiri == null)
                    <option value="MANDIRI">MANDIRI</option>
                @endif
                @if (!$pembayaran->gopay == null)
                    <option value="GOPAY">GOPAY</option>
                @endif
                @if (!$pembayaran->dana == null)
                    <option value="DANA">DANA</option>
                @endif
                @if (!$pembayaran->ovo == null)
                    <option value="OVO">OVO</option>
                @endif
                @if (!$pembayaran->linkaja == null)
                    <option value="LINKAJA">LINKAJA</option>
                @endif
            </select>
            <div class="pembayaran">
                @if (!$pembayaran->bri == null)
                    <div class="gambar">
                        <img src="{{ asset('image/bri.png') }}" alt="bri">
                    </div>
                @endif
                @if (!$pembayaran->bni == null)
                    <div class="gambar">
                        <img src="{{ asset('image/bni.png') }}" alt="bni">
                    </div>
                @endif
                @if (!$pembayaran->bca == null)
                    <div class="gambar">
                        <img src="{{ asset('image/bca.png') }}" alt="bca">
                    </div>
                @endif
                @if (!$pembayaran->mandiri == null)
                    <div class="gambar">
                        <img src="{{ asset('image/mandiri.png') }}" alt="mandiri">
                    </div>
                @endif
                @if (!$pembayaran->gopay == null)
                    <div class="gambar">
                        <img src="{{ asset('image/gopay.png') }}" alt="gopay">
                    </div>
                @endif
                @if (!$pembayaran->dana == null)
                    <div class="gambar">
                        <img src="{{ asset('image/dana.png') }}" alt="dana">
                    </div>
                @endif
                @if (!$pembayaran->ovo == null)
                    <div class="gambar">
                        <img src="{{ asset('image/ovo.png') }}" alt="ovo">
                    </div>
                @endif
                @if (!$pembayaran->linkaja == null)
                    <div class="gambar">
                        <img class="linkaja" src="{{ asset('image/linkaja.png') }}" alt="linkaja">
                    </div>
                @endif
            </div>
        </div>
        <div class="tabel rincian">
            <div class="tombol mb-4">
                <h3 class="pt-2 pb-2">Rincian Pesanan</h3>
            </div>
            <h4>{{ $jadwal->user->namatempat }}</h4>
            <h6>{{ $jadwal->tanggal }} <i class="bi bi-circle-fill ms-1 me-1"></i> {{ $jadwal->jam }}</h6>
            <div class="harga mt-4">
                <span>Harga Lapangan:</span><span>Rp. {{ $jadwal->harga }}</span>
            </div>
            <hr>
            <div class="harga">
                <span>Biaya Admin:</span><span>Rp. 0</span>
                {{-- + Kode Unik --}}
            </div>
            <hr>
            <div class="harga">
                <span>Total Bayar:</span><span>Rp. {{ $jadwal->harga }}</span>
            </div>
        </div>
        {{-- <input type="hidden" id="biaya_admin" name="biaya_admin" value="{{ $biaya_admin }}"> --}}
        <input type="hidden" id="jadwal_id" name="jadwal_id" value="{{ $jadwal->id }}">
        <input type="hidden" id="order_datetime" name="order_datetime" value="">
        <input type="hidden" id="batas_pembayaran" name="batas_pembayaran" value="">
        <div class="d-flex justify-content-center mb-5">
            <button type="submit" onclick="submitForm()" class="btn btn-success">Konfirmasi Pembayaran</button>
        </div>
    </form>

    <script>
        function submitForm() {
            var current_datetime = new Date();
            var options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var date = current_datetime.toLocaleDateString('id-ID', options);
            // var date = current_datetime.getFullYear() + '-' + (current_datetime.getMonth() + 1) + '-' + current_datetime
            //     .getDate();
            var time = current_datetime.getHours() + ":" + current_datetime.getMinutes();
            var batasWaktu = (current_datetime.getHours() + 1) + ":" + current_datetime.getMinutes();
            var datetime = date + ' ' + time;
            var batas = date + ' ' + batasWaktu;
            document.getElementById("order_datetime").value = datetime;
            document.getElementById("batas_pembayaran").value = batas;
            document.getElementById("order_form").submit();
        }
    </script>
@endsection
