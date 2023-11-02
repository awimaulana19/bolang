@extends('template.adminTemp')

@section('akun', 'Admin')

@section('head', 'Data Jadwal')

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
                        <form enctype="multipart/form-data" class="form form-horizontal"
                            action="{{ '/admin/jadwal/edit/'.$jadwal->id }}" method="POST">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Olahraga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="olahraga_id" id="olahraga_id"
                                                onchange="updateLapangan()">
                                                <option value="" selected>Pilih Olahraga</option>
                                                @foreach ($olahraga as $item)
                                                    <option value="{{ $item->id }}" {{($jadwal->olahraga_id === $item->id) ? 'Selected' : ''}}>{{ $item->jenis }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Lapangan</label>
                                    </div>
                                    <input type="hidden" id="value_lapangan" value="{{ $jadwal->lapangan_id }}">
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="lapangan_id" id="lapangan_id">
                                                @foreach ($lapangan as $item)
                                                    <option value="{{ $item->id }}" {{($jadwal->lapangan_id === $item->id) ? 'Selected' : ''}}>{{ $item->nama_lapangan }}</option>
                                                @endforeach
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Tanggal</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <input type="date" id="tanggal" class="form-control" name="tanggal"
                                            value="{{ $tanggal }}">
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <label>Jam Mulai</label>
                                    </div>
                                    <div class="col-md-9 form-group mt-2">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jammulai" id="basicSelect1">
                                                <option selected>Pilih Jam Mulai</option>
                                                <option value="00:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '00:00' ? 'Selected' : '' }}>00:00
                                                </option>
                                                <option value="01:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '01:00' ? 'Selected' : '' }}>01:00
                                                </option>
                                                <option value="02:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '02:00' ? 'Selected' : '' }}>02:00
                                                </option>
                                                <option value="03:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '03:00' ? 'Selected' : '' }}>03:00
                                                </option>
                                                <option value="04:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '04:00' ? 'Selected' : '' }}>04:00
                                                </option>
                                                <option value="05:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '05:00' ? 'Selected' : '' }}>05:00
                                                </option>
                                                <option value="06:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '06:00' ? 'Selected' : '' }}>06:00
                                                </option>
                                                <option value="07:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '07:00' ? 'Selected' : '' }}>07:00
                                                </option>
                                                <option value="08:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '08:00' ? 'Selected' : '' }}>08:00
                                                </option>
                                                <option value="09:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '09:00' ? 'Selected' : '' }}>09:00
                                                </option>
                                                <option value="10:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '10:00' ? 'Selected' : '' }}>10:00
                                                </option>
                                                <option value="11:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '11:00' ? 'Selected' : '' }}>11:00
                                                </option>
                                                <option value="12:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '12:00' ? 'Selected' : '' }}>12:00
                                                </option>
                                                <option value="13:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '13:00' ? 'Selected' : '' }}>13:00
                                                </option>
                                                <option value="14:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '14:00' ? 'Selected' : '' }}>14:00
                                                </option>
                                                <option value="15:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '15:00' ? 'Selected' : '' }}>15:00
                                                </option>
                                                <option value="16:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '16:00' ? 'Selected' : '' }}>16:00
                                                </option>
                                                <option value="17:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '17:00' ? 'Selected' : '' }}>17:00
                                                </option>
                                                <option value="18:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '18:00' ? 'Selected' : '' }}>18:00
                                                </option>
                                                <option value="19:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '19:00' ? 'Selected' : '' }}>19:00
                                                </option>
                                                <option value="20:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '20:00' ? 'Selected' : '' }}>20:00
                                                </option>
                                                <option value="21:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '21:00' ? 'Selected' : '' }}>21:00
                                                </option>
                                                <option value="22:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '22:00' ? 'Selected' : '' }}>22:00
                                                </option>
                                                <option value="23:00"
                                                    {{ substr($jadwal->jam, 0, 5) === '23:00' ? 'Selected' : '' }}>23:00
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jam Habis</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <fieldset class="form-group">
                                            <select class="form-select" name="jamhabis" id="basicSelect2">
                                                <option selected>Pilih Jam Habis</option>
                                                <option value="00:00"
                                                    {{ substr($jadwal->jam, -5) === '00:00' ? 'Selected' : '' }}>00:00
                                                </option>
                                                <option value="01:00"
                                                    {{ substr($jadwal->jam, -5) === '01:00' ? 'Selected' : '' }}>01:00
                                                </option>
                                                <option value="02:00"
                                                    {{ substr($jadwal->jam, -5) === '02:00' ? 'Selected' : '' }}>02:00
                                                </option>
                                                <option value="03:00"
                                                    {{ substr($jadwal->jam, -5) === '03:00' ? 'Selected' : '' }}>03:00
                                                </option>
                                                <option value="04:00"
                                                    {{ substr($jadwal->jam, -5) === '04:00' ? 'Selected' : '' }}>04:00
                                                </option>
                                                <option value="05:00"
                                                    {{ substr($jadwal->jam, -5) === '05:00' ? 'Selected' : '' }}>05:00
                                                </option>
                                                <option value="06:00"
                                                    {{ substr($jadwal->jam, -5) === '06:00' ? 'Selected' : '' }}>06:00
                                                </option>
                                                <option value="07:00"
                                                    {{ substr($jadwal->jam, -5) === '07:00' ? 'Selected' : '' }}>07:00
                                                </option>
                                                <option value="08:00"
                                                    {{ substr($jadwal->jam, -5) === '08:00' ? 'Selected' : '' }}>08:00
                                                </option>
                                                <option value="09:00"
                                                    {{ substr($jadwal->jam, -5) === '09:00' ? 'Selected' : '' }}>09:00
                                                </option>
                                                <option value="10:00"
                                                    {{ substr($jadwal->jam, -5) === '10:00' ? 'Selected' : '' }}>10:00
                                                </option>
                                                <option value="11:00"
                                                    {{ substr($jadwal->jam, -5) === '11:00' ? 'Selected' : '' }}>11:00
                                                </option>
                                                <option value="12:00"
                                                    {{ substr($jadwal->jam, -5) === '12:00' ? 'Selected' : '' }}>12:00
                                                </option>
                                                <option value="13:00"
                                                    {{ substr($jadwal->jam, -5) === '13:00' ? 'Selected' : '' }}>13:00
                                                </option>
                                                <option value="14:00"
                                                    {{ substr($jadwal->jam, -5) === '14:00' ? 'Selected' : '' }}>14:00
                                                </option>
                                                <option value="15:00"
                                                    {{ substr($jadwal->jam, -5) === '15:00' ? 'Selected' : '' }}>15:00
                                                </option>
                                                <option value="16:00"
                                                    {{ substr($jadwal->jam, -5) === '16:00' ? 'Selected' : '' }}>16:00
                                                </option>
                                                <option value="17:00"
                                                    {{ substr($jadwal->jam, -5) === '17:00' ? 'Selected' : '' }}>17:00
                                                </option>
                                                <option value="18:00"
                                                    {{ substr($jadwal->jam, -5) === '18:00' ? 'Selected' : '' }}>18:00
                                                </option>
                                                <option value="19:00"
                                                    {{ substr($jadwal->jam, -5) === '19:00' ? 'Selected' : '' }}>19:00
                                                </option>
                                                <option value="20:00"
                                                    {{ substr($jadwal->jam, -5) === '20:00' ? 'Selected' : '' }}>20:00
                                                </option>
                                                <option value="21:00"
                                                    {{ substr($jadwal->jam, -5) === '21:00' ? 'Selected' : '' }}>21:00
                                                </option>
                                                <option value="22:00"
                                                    {{ substr($jadwal->jam, -5) === '22:00' ? 'Selected' : '' }}>22:00
                                                </option>
                                                <option value="23:00"
                                                    {{ substr($jadwal->jam, -5) === '23:00' ? 'Selected' : '' }}>23:00
                                                </option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Harga</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="number" name="harga" class="form-control"
                                                placeholder="Harga" aria-label="harga" aria-describedby="basic-addon1"
                                                value="{{ $jadwal->harga }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Harga DP</label>
                                    </div>
                                    <div class="col-md-9 form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">Rp. </span>
                                            <input type="number" name="dp" class="form-control"
                                                placeholder="Harga DP" aria-label="dp" aria-describedby="basic-addon1" value="{{ $jadwal->dp }}">
                                        </div>
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
        async function updateLapangan() {
            const olahraga = document.getElementById('olahraga_id').value;
            const value_lapangan = document.getElementById('value_lapangan').value;

            document.getElementById('lapangan_id').innerHTML = '';
            document.getElementById('lapangan_id').disabled = true;

            try {
                const response = await fetch(`/lapanganlist?olahraga=${olahraga}`);
                const data = await response.json();

                data.forEach(lapangan => {
                    const option = document.createElement('option');
                    if (value_lapangan === lapangan.id) {
                        option.selected = true;
                    }
                    option.value = lapangan.id;
                    option.text = lapangan.nama_lapangan;
                    document.getElementById('lapangan_id').appendChild(option);
                });

                document.getElementById('lapangan_id').disabled = false;
            } catch (error) {
                console.error(error);
            }
        }
    </script>
@endsection
