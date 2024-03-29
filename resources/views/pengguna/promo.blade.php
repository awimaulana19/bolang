@extends('template.temp')

@section('title', 'Promo - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lapangan.css') }}">
    <h1 class="head">Promo Lapangan</h1>
    <div class="row rekomendasi mt-5">
        @foreach ($lapangan as $item)
            <div class="col-xl-3 col-lg-4 col-6 mb-5">
                <a href="{{ '/booking/'.$item->id }}"><img class="rounded-3 mb-3" src="{{ asset('storage/' . $item->foto) }}" width="260px"
                        height="380px"></a>
                <a href="{{ '/booking/'.$item->id }}">
                    <h5>{{ $item->user->namatempat }}</h5>
                </a>
                <h6><span>{{ $item->olahraga->jenis }}</span></h6>
                <h6>{{ $item->nama_lapangan }}</h6>
            </div>
        @endforeach
        {{-- <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Kakanta Sport Center</h5>
            </a>
            <h6><span>Futsal</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Kakanta Sport Center</h5>
            </a>
            <h6><span>Futsal</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Bulu Tangkis</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Bulu Tangkis</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Bulu Tangkis</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan1.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan2.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan3.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div>
        <div class="col-xl-3 col-lg-4 col-6 mb-5">
            <a href="/booking"><img class="rounded-3 mb-3" src="{{ asset('image/lapangan4.png') }}" width="260px"
                    height="380px"></a>
            <a href="/booking">
                <h5>Aeropala Sport Center</h5>
            </a>
            <h6><span>Basket</span></h6>
            <h6>Lapangan 1</h6>
        </div> --}}
    </div>
@endsection
