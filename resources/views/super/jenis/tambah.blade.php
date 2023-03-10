@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Data Olahraga')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Tambah Data</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="/super/jenis/tambah" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Tempat</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="user_id" id="basicSelect">
                                                <option selected>Pilih Tempat</option>
                                                @foreach ($user as $item)  
                                                <option value="{{ $item->id }}">{{ $item->namatempat }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jenis" id="basicSelect">
                                                <option selected>Pilih Jenis Olahraga</option>
                                                <option value="Futsal">Futsal</option>
                                                <option value="Mini Soccer">Mini Soccer</option>
                                                <option value="Bulu Tangkis">Bulu Tangkis</option>
                                                <option value="Basket">Basket</option>
                                                <option value="Gym">Gym</option>
                                                <option value="Tenis">Tenis</option>
                                                <option value="Tenis Meja">Tenis Meja</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Deskripsi</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="hidden" name="deskripsi" id="deskripsi">
                                        <div id="bubble" class="border border-1">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Aturan</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2" style="margin-bottom: 60px;">
                                        <input type="hidden" name="aturan" id="aturan">
                                        <div id="snow">
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-md-0 mt-4">
                                        <label>Fasilitas</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="parkiran" id="checkbox1" class="form-check-input">
                                                        <label for="checkbox1">Parkiran</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="minuman" class="form-check-input" id="checkbox2">
                                                        <label for="checkbox2">Minuman</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="ruang_ganti" id="checkbox3">
                                                        <label for="checkbox3">Ruang Ganti</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="toilet" id="checkbox4">
                                                        <label for="checkbox4">Toilet</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="wifi" id="checkbox5">
                                                        <label for="checkbox5">Wifi</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 mt-1">
                                        <label>Foto</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-1">
                                        <input type="file" id="foto" class="form-control" name="foto">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Jam Operasional</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-1">
                                        <input type="text" id="foto" class="form-control" value="Atur Jam Operasional Di Menu Edit" disabled>
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

    <script src="{{ asset('assets/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/quill.js') }}"></script>
@endsection
