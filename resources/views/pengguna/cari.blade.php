@extends('template.temp')

@section('title', 'Hasil - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/lapangan.css') }}">
    <h1 class="head">Hasil Pencarian Lapangan</h1>
    <div class="row rekomendasi mt-5">
        @if ($lapangan->isNotEmpty())
            @foreach ($lapangan->unique('lapangan_id') as $item)
                <div class="col-xl-3 col-lg-4 col-6 mb-5">
                    <a href="{{ '/booking/' . $item->lapangan_id }}"><img class="rounded-3 mb-3"
                            src="{{ asset('storage/' . $item->lapangan->foto) }}" width="260px" height="380px"></a>
                    <a href="{{ '/booking/' . $item->lapangan_id }}">
                        <h5>{{ $item->user->namatempat }}</h5>
                    </a>
                    <h6><span>{{ $item->olahraga->jenis }}</span></h6>
                    <h6>{{ $item->lapangan->nama_lapangan }}</h6>
                </div>
            @endforeach
        @else
                <h4 class="text-center mb-5 mt-2">Jadwal Dengan Tanggal Tersebut Tidak Tersedia</h4>
        @endif
    </div>
@endsection
