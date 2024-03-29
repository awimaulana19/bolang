@extends('template.temp')

@section('title', 'Lapangan - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lapangan.css') }}">
    <h1 class="head">Lapangan Dan Jenis Olahraga</h1>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Futsal</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Futsal">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($futsal->isNotEmpty())
            @foreach ($futsal as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}" width="260px"
                            height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
        {{-- <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div> --}}
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Mini Soccer</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Mini Soccer">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($minisoccer->isNotEmpty())
            @foreach ($minisoccer as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}" width="260px"
                            height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
        {{-- <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 2</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 3</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
            <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="{{ '/pilih/'.$item->id }}">
                <h5>Lapangan 4</h5>
            </a>
            <h6>Makassar - <span>1 Lapangan</span></h6>
            <h6>Harga Mulai - <span class="harga">Rp 200.000</span></h6>
        </div> --}}
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Bulu Tangkis</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Bulu Tangkis">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($bulutangkis->isNotEmpty())
            @foreach ($bulutangkis as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}"
                            width="260px" height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Basket</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Basket">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($basket->isNotEmpty())
            @foreach ($basket as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}"
                            width="260px" height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Gym</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Gym">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($gym->isNotEmpty())
            @foreach ($gym as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}"
                            width="260px" height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Tenis</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Tenis">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi">
        @if ($tenis->isNotEmpty())
            @foreach ($tenis as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}"
                            width="260px" height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
    </div>
    <div class="row headrekom mt-5 mb-3">
        <div class="col-7">
            <h3>Lapangan <span>Tenis Meja</span></h3>
        </div>
        <div class="col-5">
            <a class="mt-1" href="/olahraga/Tenis Meja">Selengkapnya..</a>
        </div>
    </div>
    <div class="row rekomendasi mb-5">
        @if ($tenismeja->isNotEmpty())
            @foreach ($tenismeja as $item)
                <div class="col-xl-3 col-lg-4 col-6 mt-lg-2 mb-lg-0 mb-xl-0 mb-5">
                    <a href="{{ '/pilih/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}"
                            width="260px" height="380px"></a>
                    <a href="{{ '/pilih/'.$item->id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6>{{ $item->user->alamat }} - <span>{{ $item->lapangan->count() }} Lapangan</span></h6>
                    @php
                        $lowestPrice = PHP_INT_MAX;
                    @endphp
                    @foreach ($item->jadwal as $jadwal)
                        @php
                            $lowestPrice = min($lowestPrice, $jadwal['harga']);
                        @endphp
                    @endforeach
                    <h6>Harga Mulai - <span class="harga">
                            Rp. @if ($item->jadwal->isEmpty())
                                0
                            @else
                                {{ $lowestPrice }}
                            @endif
                        </span></h6>
                </div>
            @endforeach
        @else
            <h4 class="mt-3">Akan Datang</h4>
        @endif
    </div>
@endsection
