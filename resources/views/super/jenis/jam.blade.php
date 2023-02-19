@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Jam Operasional')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Atur Jam Operasional</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{'/super/jenis/operasional/'.$olahraga->id}}" enctype="multipart/form-data" class="form form-horizontal" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Senin</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="seninbuka" id="basicSelect1">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="senintutup" id="basicSelect2">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalsenin) @else {{($operasionalsenin->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Selasa</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="selasabuka" id="basicSelect3">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="selasatutup" id="basicSelect4">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalselasa) @else {{($operasionalselasa->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Rabu</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="rabubuka" id="basicSelect5">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="rabututup" id="basicSelect6">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalrabu) @else {{($operasionalrabu->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Kamis</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="kamisbuka" id="basicSelect7">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="kamistutup" id="basicSelect8">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalkamis) @else {{($operasionalkamis->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jum'at</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jumatbuka" id="basicSelect9">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jumattutup" id="basicSelect10">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionaljumat) @else {{($operasionaljumat->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Sabtu</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="sabtubuka" id="basicSelect11">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="sabtututup" id="basicSelect12">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalsabtu) @else {{($operasionalsabtu->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Minggu</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="minggubuka" id="basicSelect13">
                                                <option value="0" selected>Pilih Jam Buka</option>
                                                <option value="0">Tutup</option>
                                                <option value="00:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '00:00') ? 'Selected' : ''}} @endempty >00:00</option>
                                                <option value="01:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_buka === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select class="form-select" name="minggututup" id="basicSelect14">
                                                <option value="00:00" selected>Pilih Jam Tutup</option>
                                                <option value="00:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '00:00') ? 'Selected' : ''}} @endempty>00:00</option>
                                                <option value="01:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '01:00') ? 'Selected' : ''}} @endempty>01:00</option>
                                                <option value="02:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '02:00') ? 'Selected' : ''}} @endempty>02:00</option>
                                                <option value="03:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '03:00') ? 'Selected' : ''}} @endempty>03:00</option>
                                                <option value="04:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '04:00') ? 'Selected' : ''}} @endempty>04:00</option>
                                                <option value="05:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '05:00') ? 'Selected' : ''}} @endempty>05:00</option>
                                                <option value="06:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '06:00') ? 'Selected' : ''}} @endempty>06:00</option>
                                                <option value="07:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '07:00') ? 'Selected' : ''}} @endempty>07:00</option>
                                                <option value="08:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '08:00') ? 'Selected' : ''}} @endempty>08:00</option>
                                                <option value="09:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '09:00') ? 'Selected' : ''}} @endempty>09:00</option>
                                                <option value="10:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '10:00') ? 'Selected' : ''}} @endempty>10:00</option>
                                                <option value="11:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '11:00') ? 'Selected' : ''}} @endempty>11:00</option>
                                                <option value="12:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '12:00') ? 'Selected' : ''}} @endempty>12:00</option>
                                                <option value="13:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '13:00') ? 'Selected' : ''}} @endempty>13:00</option>
                                                <option value="14:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '14:00') ? 'Selected' : ''}} @endempty>14:00</option>
                                                <option value="15:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '15:00') ? 'Selected' : ''}} @endempty>15:00</option>
                                                <option value="16:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '16:00') ? 'Selected' : ''}} @endempty>16:00</option>
                                                <option value="17:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '17:00') ? 'Selected' : ''}} @endempty>17:00</option>
                                                <option value="18:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '18:00') ? 'Selected' : ''}} @endempty>18:00</option>
                                                <option value="19:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '19:00') ? 'Selected' : ''}} @endempty>19:00</option>
                                                <option value="20:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '20:00') ? 'Selected' : ''}} @endempty>20:00</option>
                                                <option value="21:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '21:00') ? 'Selected' : ''}} @endempty>21:00</option>
                                                <option value="22:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '22:00') ? 'Selected' : ''}} @endempty>22:00</option>
                                                <option value="23:00" @empty($operasionalminggu) @else {{($operasionalminggu->jam_tutup === '23:00') ? 'Selected' : ''}} @endempty>23:00</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1 mt-1">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("basicSelect1").addEventListener("change", function() {
          var basicSelect2 = document.getElementById("basicSelect2");
          if (this.value === "0") {
            basicSelect2.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect2.removeAttribute("disabled");
          } else {
            basicSelect2.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect3").addEventListener("change", function() {
          var basicSelect4 = document.getElementById("basicSelect4");
          if (this.value === "0") {
            basicSelect4.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect4.removeAttribute("disabled");
          } else {
            basicSelect4.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect5").addEventListener("change", function() {
          var basicSelect6 = document.getElementById("basicSelect6");
          if (this.value === "0") {
            basicSelect6.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect6.removeAttribute("disabled");
          } else {
            basicSelect6.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect7").addEventListener("change", function() {
          var basicSelect8 = document.getElementById("basicSelect8");
          if (this.value === "0") {
            basicSelect8.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect8.removeAttribute("disabled");
          } else {
            basicSelect8.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect9").addEventListener("change", function() {
          var basicSelect10 = document.getElementById("basicSelect10");
          if (this.value === "0") {
            basicSelect10.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect10.removeAttribute("disabled");
          } else {
            basicSelect10.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect11").addEventListener("change", function() {
          var basicSelect12 = document.getElementById("basicSelect12");
          if (this.value === "0") {
            basicSelect12.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect12.removeAttribute("disabled");
          } else {
            basicSelect12.setAttribute("disabled", true);
          }
        });
        document.getElementById("basicSelect13").addEventListener("change", function() {
          var basicSelect14 = document.getElementById("basicSelect14");
          if (this.value === "0") {
            basicSelect14.setAttribute("disabled", true);
          } else if (this.value) {
            basicSelect14.removeAttribute("disabled");
          } else {
            basicSelect14.setAttribute("disabled", true);
          }
        });
    </script>
@endsection
