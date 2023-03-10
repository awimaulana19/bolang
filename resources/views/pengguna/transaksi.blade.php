@extends('template.temp')

@section('title', 'Transaksi - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/transaksi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}">
    <div class="container tabel my-5">
        <h3 class="mb-4 mb-lg-5">Riwayat Transaksi</h3>
        <div class="row justify-content-around">
            <div class="col-4 baris">
                <div class="tombol">
                    <label>Belum Di Bayar/Proses</label>
                </div>
                @foreach ($transaksiproses as $item)
                    <div class="riwayat">
                        <p>{{ $item->waktu_order }}</p>
                        <span>{{ $item->lapangan->nama_lapangan }} - {{ $item->user->namatempat }} </span>
                        <p>{{ $item->order_id }}</p>
                        <hr>
                        <div class="tanda">
                            <a href="{{ '/bayar/' . $item->id }}" class="btn btn-success">Konfirmasi Ulang</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="riwayat">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda">
                        <a href="#" class="btn btn-success">Konfirmasi Ulang</a>
                    </div>
                </div> --}}
            </div>
            <div class="col-4 baris1">
                <div class="tombol">
                    <label>Transaksi Selesai</label>
                </div>
                @foreach ($transaksiselesai as $item)
                    <div class="riwayat">
                        <p>{{ $item->waktu_order }}</p>
                        <span>{{ $item->lapangan->nama_lapangan }} - {{ $item->user->namatempat }} </span>
                        <p>{{ $item->order_id }}</p>
                        <hr>
                        <div class="tanda d-flex justify-content-between">
                            <a href="{{ '/bayar/' . $item->id }}" class="btn btn-success">Riwayat</a>
                            <a href="/etiket" class="btn btn-success">E-Ticket</a>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="riwayat">
                    <p>15 Des 2022 - 17:00 WIB</p>
                    <span>NE16 - LAPANGAN KAKANTA </span>
                    <p>Ref : NE16-1141111UYD6</p>
                    <hr>
                    <div class="tanda d-flex justify-content-between">
                        <a href="#" class="btn btn-success">Riwayat</a>
                        <a href="/etiket" class="btn btn-success">E-Ticket</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>

    @if (session('berhasil'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('berhasil') }}',
                text: '{{ session('infoberhasil') }}',
            })
        </script>
    @endif

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
