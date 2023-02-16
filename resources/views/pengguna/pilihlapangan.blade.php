@extends('template.temp')

@section('title', 'Pilih Lapangan - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pilihlapangan.css') }}">
    <div class="row hero mt-5 mb-5">
        <img class="imghero" src="{{ asset('storage/' . $olahraga->foto) }}" alt="hero">
        <h1 class="head">{{ $olahraga->user->namatempat }}</h1>
        <p class="desk">{{ $olahraga->jenis }} Di {{ $olahraga->user->alamat }}</p>
        <div class="d-flex mt-2">
            <a target="_block" href="{{ 'https://www.instagram.com/' . $olahraga->user->instagram }}" class="bulat">
                <img src="{{ asset('image/ig.png') }}" alt="instagram">
            </a>
            <a target="_block" href="{{ 'https://wa.me/' . $olahraga->user->whatsapp }}" class="bulat">
                <img src="{{ asset('image/wa.png') }}" alt="whatsapp">
            </a>
        </div>
    </div>
    <hr>
    <div class="row daftar mt-5">
        <div class="all">
            @foreach ($olahraga->lapangan as $item)
                <div class="kartu">
                    <img src="{{ asset('storage/' . $item->foto) }}" alt="lapangan">
                    <h1>{{ $item->nama_lapangan }}</h1>
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
                    @if ($item->jadwal->isEmpty())
                        <p>Rp. 0 ~ Rp. 0</p>
                    @else
                        <p>Rp. {{ $lowestPrice }} ~ Rp. {{ $highestPrice }}</p>
                    @endif
                    <a class="btn btn-success" href="{{ '/booking/'.$item->id }}">Lihat Jadwal</a>
                </div>
            @endforeach
            {{-- <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 2</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="/booking">Lihat Jadwal</a>
            </div>
            <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="/booking">Lihat Jadwal</a>
            </div> --}}
            {{-- <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="/booking">Lihat Jadwal</a>
            </div> --}}
            {{-- <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="/booking">Lihat Jadwal</a>
            </div> --}}
        </div>
    </div>
    <div class="row deskripsi mt-3">
        <h1 class="mb-2">Deskripsi Lapangan</h1>
        <p class="text-center">{!! $olahraga->deskripsi !!}</p>

        <h1 class="mt-5 mb-2">Aturan Lapangan</h1>
        {!! $olahraga->aturan !!}

        <h1 class="mt-5 mb-3">Jam Operasional</h1>
        <div class="d-flex operasional">
            @if ($olahraga->operasional->isNotEmpty())
                @foreach ($olahraga->operasional as $item)
                    <div class="waktu">
                        <h4>{{ $item->hari }}</h4>
                        @if ($item->jam_buka === 'Tutup')
                            <h6>Tutup</h6>
                        @else
                            <h6>{{ $item->jam_buka }} - {{ $item->jam_tutup }}</h6>
                        @endif
                    </div>
                @endforeach
            @else
                <h3 class="mt-3">Tutup</h3>
            @endif
            {{-- <div class="waktu">
                <h4>Selasa</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
                <h4>Rabu</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
                <h4>Kamis</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
                <h4>Jum'at</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
                <h4>Sabtu</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
                <h4>Minggu</h4>
                <h6>10.00 - 00.00</h6>
            </div> --}}
        </div>
    </div>
    <div class="row fasilitas justify-content-center mt-5">
        <div class="isi mb-5">
            <h1>Fasilitas</h1>
            <div class="semuaitem">
                @if ($olahraga->parkiran === 1)
                    <div class="item mb-5">
                        <img src="{{ asset('image/parkiran.png') }}" alt="icon" width="85px" height="50px">
                        <h2>Parkiran</h2>
                    </div>
                @endif
                @if ($olahraga->minuman === 1)
                    <div class="item mb-5">
                        <img src="{{ asset('image/minuman.png') }}" alt="icon" width="50px" height="68px">
                        <h2>Minuman</h2>
                    </div>
                @endif
                {{-- <hr> --}}
                @if ($olahraga->ruang_ganti === 1)
                    <div class="item mb-5">
                        <img src="{{ asset('image/ruang.png') }}" alt="icon" width="36px" height="65px">
                        <h2>Ruang Ganti</h2>
                    </div>
                @endif
                @if ($olahraga->toilet === 1)
                    <div class="item mb-5">
                        <img src="{{ asset('image/toilet.png') }}" alt="icon" width="72px" height="65px">
                        <h2>Toilet</h2>
                    </div>
                @endif
                {{-- <hr> --}}
                @if ($olahraga->wifi === 1)
                    <div class="item mb-5">
                        <img src="{{ asset('image/wifi.png') }}" alt="icon" width="70px" height="65px">
                        <h2>Wifi</h2>
                    </div>
                @endif
            </div>
        </div>
        <div class="isi lokasi mt-5 mb-5">
            <h1>Lokasi</h1>
            <h5>{{ $olahraga->user->lokasi }}</h5>
            <hr>
            <div class="maps mb-3 d-flex justify-content-center">
                <iframe
                    src="{{ $olahraga->user->maps }}"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
