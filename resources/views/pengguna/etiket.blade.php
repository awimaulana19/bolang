@extends('template.temp')

@section('title', 'E-Ticket - Bolang')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/etiket.css') }}">
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
            <a href="#" class="bulat">
                <img src="{{ asset('image/barcode.png') }}" alt="whatsapp">
            </a>
        </div>
    </div>
    <hr>
    <div class="row deskripsi mt-3 mb-5">
        <div class="col-7">
            <h1 class="mb-2">Deskripsi Lapangan</h1>
            <p>Lorem ipsum dolor sit amet consectetur. Placerat turpis sed cras scelerisque. Cursus ornare
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
        </div>
        <div class="fasilitas mt-2 col-2">
            <div class="row isi">
                <p>E-ticket</p>
                <h3>Rp 135.000</h3>
                <div class="col-sm-6 col-md-8 waktu">
                    <label>Tanggal <br><span>12 Desember 2022</span></label>
                    <label class="mt-4">Jam <br><span>19:00 - 20:00</span></label>
                </div>
                <div class="col-6 col-md-4 waktu">
                    <label>Hari <br><span>Sabtu</span></label>
                </div>
            </div>
        </div>
    </div>    
@endsection