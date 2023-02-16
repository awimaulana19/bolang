@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Data Olahraga')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between" style="margin-bottom:-20px;">
                    <div class="card-title">Edit Data</div>
                    <a href="{{url('/admin/jenis/operasional/'.$olahraga->id)}}" class="btn btn-primary" style="height:40px;">Atur Jam Operasional</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="{{url('/admin/jenis/edit/'.$olahraga->id)}}" method="POST">
                            @csrf 
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jenis" id="basicSelect">
                                                <option selected>Pilih Jenis Olahraga</option>
                                                <option value="Futsal" {{($olahraga->jenis === 'Futsal') ? 'Selected' : ''}}>Futsal</option>
                                                <option value="Mini Soccer" {{($olahraga->jenis === 'Mini Soccer') ? 'Selected' : ''}}>Mini Soccer</option>
                                                <option value="Bulu Tangkis" {{($olahraga->jenis === 'Bulu Tangkis') ? 'Selected' : ''}}>Bulu Tangkis</option>
                                                <option value="Basket" {{($olahraga->jenis === 'Basket') ? 'Selected' : ''}}>Basket</option>
                                                <option value="Gym" {{($olahraga->jenis === 'Gym') ? 'Selected' : ''}}>Gym</option>
                                                <option value="Tenis" {{($olahraga->jenis === 'Tenis') ? 'Selected' : ''}}>Tenis</option>
                                                <option value="Tenis Meja" {{($olahraga->jenis === 'Tenis Meja') ? 'Selected' : ''}}>Tenis Meja</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Deskripsi</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="hidden" name="deskripsi" id="deskripsi">
                                        <div id="bubble" class="border border-1">
                                            {!! $olahraga->deskripsi !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Aturan</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2" style="margin-bottom: 60px;">
                                        <input type="hidden" name="aturan" id="aturan">
                                        <div id="snow">
                                            {!! $olahraga->aturan !!}
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Fasilitas</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" name="parkiran" id="checkbox1" class="form-check-input" @checked($olahraga->parkiran == true)>
                                                        <label for="checkbox1">Parkiran</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="minuman" id="checkbox2" @checked($olahraga->minuman == true)>
                                                        <label for="checkbox2">Minuman</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="ruang_ganti" id="checkbox3" @checked($olahraga->ruang_ganti == true)>
                                                        <label for="checkbox3">Ruang Ganti</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="toilet" id="checkbox4" @checked($olahraga->toilet == true)>
                                                        <label for="checkbox4">Toilet</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <input type="checkbox" class="form-check-input" name="wifi" id="checkbox5" @checked($olahraga->wifi == true)>
                                                        <label for="checkbox5">Wifi</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 mt-1">
                                        <label>Foto</label>
                                    </div>
                                    <input type="hidden" name="fotoLama" id="fotoLama" value="{{ $olahraga->foto }}">
                                    <div class="col-md-9 form-group mt-1">
                                        <input type="file" id="foto" class="form-control" name="foto">
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
        var quill = new Quill('#bubble', {
            theme: 'bubble'
        });

        var quill2 = new Quill('#snow', {
            theme: 'snow'
        });

        document.querySelector('form').onsubmit = function() {
            var content = quill.getContents();
            var text = content.toString();
            document.querySelector('#deskripsi').value = text;

            var content2 = quill2.getContents();
            var text2 = content2.toString();
            document.querySelector('#aturan').value = text2;
        }
    </script>

    <script src="{{ asset('assets/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/quill.js') }}"></script>
@endsection
