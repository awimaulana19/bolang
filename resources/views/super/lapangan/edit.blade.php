@extends('template.adminTemp')

@section('akun', 'Super Admin')

@section('head', 'Data Lapangan')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/quill/quill.bubble.css') }}">
    <section class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title" style="margin-bottom: -10px;">Edit Data</div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="form form-horizontal" action="{{ '/super/lapangan/edit/'.$lapangan->id }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Nama Lapangan</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="text" id="nama" class="form-control" name="nama_lapangan" placeholder="Nama Lapangan" value="{{ $lapangan->nama_lapangan }}">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Tempat</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="user_id" id="user_id"
                                                onchange="updateOlahraga()">
                                                <option selected>Pilih Tempat</option>
                                                @foreach ($user as $item)
                                                    <option value="{{ $item->id }}" {{($lapangan->user_id === $item->id) ? 'Selected' : ''}}>{{ $item->namatempat }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="olahraga_id" id="olahraga_id">
                                                @foreach ($olahraga as $item)
                                                    <option value="{{ $item->id }}" {{($lapangan->olahraga_id === $item->id) ? 'Selected' : ''}}>{{ $item->jenis }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Foto</label>
                                    </div>
                                    <input type="hidden" name="fotoLama" id="fotoLama" value="{{ $lapangan->foto }}">
                                    <div class="col-md-9 form-group">
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
        async function updateOlahraga() {
            const user = document.getElementById('user_id').value;

            document.getElementById('olahraga_id').innerHTML = '';
            document.getElementById('olahraga_id').disabled = true;

            try {
                const response = await fetch(`/olahragalist?user=${user}`);
                const data = await response.json();

                data.forEach(olahraga => {
                    const option = document.createElement('option');
                    option.value = olahraga.id;
                    option.text = olahraga.jenis;
                    document.getElementById('olahraga_id').appendChild(option);
                });

                document.getElementById('olahraga_id').disabled = false;
            } catch (error) {
                console.error(error);
            }
        }
    </script>
@endsection
