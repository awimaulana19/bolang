@extends('template.temp')

@section('title', 'Booking - Bolang')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    @vite('resources/css/app.css')
    <input type="hidden" id="idLapangan" value="{{ $id }}">
    <div id="booking"></div>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    @vite('resources/js/app.js')
@endsection
