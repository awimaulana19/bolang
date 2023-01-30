@extends('template.temp')

@section('title', 'Bolang | Pilih Lapangan')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pilihlapangan.css') }}">
    <div class="row hero mt-5 mb-5">
        <img class="imghero" src="{{ asset('image/heropilih.png') }}" alt="hero">
        <h1 class="head">Kakanta Sport Center</h1>
        <p class="desk">Futsal Di Kota Makassar</p>
        <div class="d-flex mt-2">
            <a href="#" class="bulat">
                <img src="{{ asset('image/ig.png') }}" alt="instagram">
            </a>
            <a href="#" class="bulat">
                <img src="{{ asset('image/wa.png') }}" alt="whatsapp">
            </a>
        </div>
    </div>
    <hr>
    <div class="row daftar mt-5">
        <div class="all">
            <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 1</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="#">Lihat Jadwal</a>
            </div>
            <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 2</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="#">Lihat Jadwal</a>
            </div>
            <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="#">Lihat Jadwal</a>
            </div>
            {{-- <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="#">Lihat Jadwal</a>
            </div> --}}
            {{-- <div class="kartu">
                <img src="{{ asset('image/lapangan2.png') }}" alt="lapangan">
                <h1>Lapangan 3</h1>
                <p>Rp. 135.000</p>
                <a class="btn btn-success" href="#">Lihat Jadwal</a>
            </div> --}}
        </div>
    </div>
    <div class="row deskripsi mt-3">
        <h1 class="mb-2">Deskripsi Lapangan</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur. Placerat turpis sed cras scelerisque. Cursus ornare
            habitasse non quis vel. Curabitur praesent id ullamcorper volutpat facilisi purus. Tortor vulputate et quis
            nulla. Enim volutpat natoque habitant ipsum faucibus mauris velit sed. Consectetur morbi cras quis consectetur
            orci mauris mi ornare pulvinar. Massa ultricies viverra pulvinar convallis sem. At in dictum cras amet arcu enim
            volutpat lorem feugiat. Sem vitae diam eleifend ac sed interdum nascetur. Eros sodales at fermentum dui.</p>

        <h1 class="mt-5 mb-2">Aturan Lapangan</h1>
        <ul>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
            <li>Lorem ipsum dolor sit amet expedita magni aperiam quia non deleniti magnam, doloremque, distinctio amet
                laboriosam eius</li>
        </ul>

        <h1 class="mt-5 mb-3">Jam Operasional</h1>
        <div class="d-flex operasional">
            <div class="waktu">
                <h4>Senin</h4>
                <h6>10.00 - 00.00</h6>
            </div>
            <div class="waktu">
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
            </div>
        </div>
    </div>
    <div class="row fasilitas justify-content-center mt-5">
        <div class="isi mb-5">
            <h1>Fasilitas</h1>
            <div class="semuaitem">
                <div class="item">
                    <img src="{{ asset('image/parkiran.png') }}" alt="icon" width="85px" height="50px">
                    <h2>Parkiran</h2>
                </div>
                <div class="item">
                    <img src="{{ asset('image/minuman.png') }}" alt="icon" width="50px" height="68px">
                    <h2>Minuman</h2>
                </div>
                <hr>
                <div class="item">
                    <img src="{{ asset('image/ruang.png') }}" alt="icon" width="36px" height="65px">
                    <h2>Ruang Ganti</h2>
                </div>
                <div class="item">
                    <img src="{{ asset('image/toilet.png') }}" alt="icon" width="72px" height="65px">
                    <h2>Toilet</h2>
                </div>
                <hr>
                <div class="item">
                    <img src="{{ asset('image/wifi.png') }}" alt="icon" width="70px" height="65px">
                    <h2>Wifi</h2>
                </div>
            </div>
        </div>
        <div class="isi lokasi mt-5 mb-5">
            <h1>Lokasi</h1>
            <h5>Ps. Tradisional Jongkok, Jl. Antang Raya No.118, Antang, Kec. Manggala, Kota Makassar</h5>
            <hr>
            <div class="maps mb-3 d-flex justify-content-center">
                <iframe
                    src="https://maps.google.com/maps?q=Kakanta%20Sport%20Center,%20Jalan%20Antang%20Raya,%20Antang,%20Makassar%20City,%20South%20Sulawesi&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
