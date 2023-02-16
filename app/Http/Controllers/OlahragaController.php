<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Operasional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OlahragaController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.jenis', compact('olahraga'));
    }

    public function tambah()
    {
        return view('admin.jenis.tambah');
    }

    public function operasional($id)
    {
        $olahraga = Olahraga::where('id', $id)->first();
        $operasionalsenin = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Senin")
                                            ->first();
        $operasionalselasa = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Selasa")
                                            ->first();
        $operasionalrabu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Rabu")
                                            ->first();
        $operasionalkamis = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Kamis")
                                            ->first();
        $operasionaljumat = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Jum'at")
                                            ->first();
        $operasionalsabtu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Sabtu")
                                            ->first();
        $operasionalminggu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Minggu")
                                            ->first();

        return view('admin.jenis.jam', compact('olahraga', 'operasionalsenin', 'operasionalselasa', 'operasionalrabu', 'operasionalkamis', 'operasionaljumat', 'operasionalsabtu', 'operasionalminggu'));
    }

    public function edit($id)
    {
        $olahraga = Olahraga::where('id', $id)->first();
        return view('admin.jenis.edit', compact('olahraga'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $jenis = $request->jenis;
        $deskripsi = $request->input('deskripsi');
        $aturan = $request->input('aturan');
        $parkiran = $request->input('parkiran') ? true : false;
        $minuman = $request->input('minuman') ? true : false;
        $ruang_ganti = $request->input('ruang_ganti') ? true : false;
        $toilet = $request->input('toilet') ? true : false;
        $wifi = $request->input('wifi') ? true : false;

        $olahraga = new Olahraga();

        $olahraga->user_id = $user_id;
        $olahraga->jenis = $jenis;
        $olahraga->deskripsi = $deskripsi;
        $olahraga->aturan = $aturan;
        $olahraga->parkiran = $parkiran;
        $olahraga->minuman = $minuman;
        $olahraga->ruang_ganti = $ruang_ganti;
        $olahraga->toilet = $toilet;
        $olahraga->wifi = $wifi;
        if ($request->file('foto')) {
            $olahraga->foto = $request->file('foto')->store('foto-olahraga');
        }

        $olahraga->save();

        return redirect('admin/jenis');
    }

    public function update(Request $request, $id)
    {
        $olahraga = Olahraga::where('id', $id)->first();

        $olahraga->user_id = Auth::user()->id;
        $olahraga->jenis = $request->jenis;
        $olahraga->deskripsi = $request->input('deskripsi');
        $olahraga->aturan = $request->input('aturan');
        $olahraga->parkiran = $request->input('parkiran') ? true : false;
        $olahraga->minuman = $request->input('minuman') ? true : false;
        $olahraga->ruang_ganti = $request->input('ruang_ganti') ? true : false;
        $olahraga->toilet = $request->input('toilet') ? true : false;
        $olahraga->wifi = $request->input('wifi') ? true : false;
        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $olahraga->foto = $request->file('foto')->store('foto-olahraga');
        }

        $olahraga->update();

        return redirect('admin/jenis');
    }

    public function storeOperasional(Request $request, $id)
    {
        $olahraga = Olahraga::where('id', $id)->first();
        $operasional = Operasional::where('olahraga_id', $olahraga->id)->get();

        $seninbuka = $request->seninbuka;
        $senintutup = $request->senintutup;
        $selasabuka = $request->selasabuka;
        $selasatutup = $request->selasatutup;
        $rabubuka = $request->rabubuka;
        $rabututup = $request->rabututup;
        $kamisbuka = $request->kamisbuka;
        $kamistutup = $request->kamistutup;
        $jumatbuka = $request->jumatbuka;
        $jumattutup = $request->jumattutup;
        $sabtubuka = $request->sabtubuka;
        $sabtututup = $request->sabtututup;
        $minggubuka = $request->minggubuka;
        $minggututup = $request->minggututup;
        

        if ($operasional->isEmpty()) {
            $operasionalsenin = new Operasional();
            $operasionalselasa = new Operasional();
            $operasionalrabu = new Operasional();
            $operasionalkamis = new Operasional();
            $operasionaljumat = new Operasional();
            $operasionalsabtu = new Operasional();
            $operasionalminggu = new Operasional();
            if ($seninbuka == "0") {
                $operasionalsenin->olahraga_id = $olahraga->id;
                $operasionalsenin->hari = "Senin";
                $operasionalsenin->jam_buka = "Tutup";
                $operasionalsenin->jam_tutup = "Tutup";
                $operasionalsenin->save();
            } else{
                $operasionalsenin->olahraga_id = $olahraga->id;
                $operasionalsenin->hari = "Senin";
                $operasionalsenin->jam_buka = $seninbuka;
                $operasionalsenin->jam_tutup = $senintutup;
                $operasionalsenin->save();
            }
            if ($selasabuka == "0") {
                $operasionalselasa->olahraga_id = $olahraga->id;
                $operasionalselasa->hari = "Selasa";
                $operasionalselasa->jam_buka = "Tutup";
                $operasionalselasa->jam_tutup = "Tutup";
                $operasionalselasa->save();
            } else{
                $operasionalselasa->olahraga_id = $olahraga->id;
                $operasionalselasa->hari = "Selasa";
                $operasionalselasa->jam_buka = $selasabuka;
                $operasionalselasa->jam_tutup = $selasatutup;
                $operasionalselasa->save();
            }
            if ($rabubuka == "0") {
                $operasionalrabu->olahraga_id = $olahraga->id;
                $operasionalrabu->hari = "Rabu";
                $operasionalrabu->jam_buka = "Tutup";
                $operasionalrabu->jam_tutup = "Tutup";
                $operasionalrabu->save();
            } else{
                $operasionalrabu->olahraga_id = $olahraga->id;
                $operasionalrabu->hari = "Rabu";
                $operasionalrabu->jam_buka = $rabubuka;
                $operasionalrabu->jam_tutup = $rabututup;
                $operasionalrabu->save();
            }
            if ($kamisbuka == "0") {
                $operasionalkamis->olahraga_id = $olahraga->id;
                $operasionalkamis->hari = "Kamis";
                $operasionalkamis->jam_buka = "Tutup";
                $operasionalkamis->jam_tutup = "Tutup";
                $operasionalkamis->save();
            } else{
                $operasionalkamis->olahraga_id = $olahraga->id;
                $operasionalkamis->hari = "Kamis";
                $operasionalkamis->jam_buka = $kamisbuka;
                $operasionalkamis->jam_tutup = $kamistutup;
                $operasionalkamis->save();
            }
            if ($jumatbuka == "0") {
                $operasionaljumat->olahraga_id = $olahraga->id;
                $operasionaljumat->hari = "Jum'at";
                $operasionaljumat->jam_buka = "Tutup";
                $operasionaljumat->jam_tutup = "Tutup";
                $operasionaljumat->save();
            } else{
                $operasionaljumat->olahraga_id = $olahraga->id;
                $operasionaljumat->hari = "Jum'at";
                $operasionaljumat->jam_buka = $jumatbuka;
                $operasionaljumat->jam_tutup = $jumattutup;
                $operasionaljumat->save();
            }
            if ($sabtubuka == "0") {
                $operasionalsabtu->olahraga_id = $olahraga->id;
                $operasionalsabtu->hari = "Sabtu";
                $operasionalsabtu->jam_buka = "Tutup";
                $operasionalsabtu->jam_tutup = "Tutup";
                $operasionalsabtu->save();
            } else{
                $operasionalsabtu->olahraga_id = $olahraga->id;
                $operasionalsabtu->hari = "Sabtu";
                $operasionalsabtu->jam_buka = $sabtubuka;
                $operasionalsabtu->jam_tutup = $sabtututup;
                $operasionalsabtu->save();
            }
            if ($minggubuka == "0") {
                $operasionalminggu->olahraga_id = $olahraga->id;
                $operasionalminggu->hari = "Minggu";
                $operasionalminggu->jam_buka = "Tutup";
                $operasionalminggu->jam_tutup = "Tutup";
                $operasionalminggu->save();
            } else{
                $operasionalminggu->olahraga_id = $olahraga->id;
                $operasionalminggu->hari = "Minggu";
                $operasionalminggu->jam_buka = $minggubuka;
                $operasionalminggu->jam_tutup = $minggututup;
                $operasionalminggu->save();
            }
        }else{
            $operasionalsenin = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Senin")
                                            ->first();
            $operasionalselasa = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Selasa")
                                            ->first();
            $operasionalrabu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Rabu")
                                            ->first();
            $operasionalkamis = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Kamis")
                                            ->first();
            $operasionaljumat = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Jum'at")
                                            ->first();
            $operasionalsabtu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Sabtu")
                                            ->first();
            $operasionalminggu = Operasional::where('olahraga_id', $olahraga->id)
                                            ->where('hari', "Minggu")
                                            ->first();
            if ($seninbuka == "0") {
                $operasionalsenin->jam_buka = "Tutup";
                $operasionalsenin->jam_tutup = "Tutup";
                $operasionalsenin->update();
            } else{
                $operasionalsenin->jam_buka = $seninbuka;
                $operasionalsenin->jam_tutup = $senintutup;
                $operasionalsenin->update();
            }
            if ($selasabuka == "0") {
                $operasionalselasa->jam_buka = "Tutup";
                $operasionalselasa->jam_tutup = "Tutup";
                $operasionalselasa->update();
            } else{
                $operasionalselasa->jam_buka = $selasabuka;
                $operasionalselasa->jam_tutup = $selasatutup;
                $operasionalselasa->update();
            }
            if ($rabubuka == "0") {
                $operasionalrabu->jam_buka = "Tutup";
                $operasionalrabu->jam_tutup = "Tutup";
                $operasionalrabu->update();
            } else{
                $operasionalrabu->jam_buka = $rabubuka;
                $operasionalrabu->jam_tutup = $rabututup;
                $operasionalrabu->update();
            }
            if ($kamisbuka == "0") {
                $operasionalkamis->jam_buka = "Tutup";
                $operasionalkamis->jam_tutup = "Tutup";
                $operasionalkamis->update();
            } else{
                $operasionalkamis->jam_buka = $kamisbuka;
                $operasionalkamis->jam_tutup = $kamistutup;
                $operasionalkamis->update();
            }
            if ($jumatbuka == "0") {
                $operasionaljumat->jam_buka = "Tutup";
                $operasionaljumat->jam_tutup = "Tutup";
                $operasionaljumat->update();
            } else{
                $operasionaljumat->jam_buka = $jumatbuka;
                $operasionaljumat->jam_tutup = $jumattutup;
                $operasionaljumat->update();
            }
            if ($sabtubuka == "0") {
                $operasionalsabtu->jam_buka = "Tutup";
                $operasionalsabtu->jam_tutup = "Tutup";
                $operasionalsabtu->update();
            } else{
                $operasionalsabtu->jam_buka = $sabtubuka;
                $operasionalsabtu->jam_tutup = $sabtututup;
                $operasionalsabtu->update();
            }
            if ($minggubuka == "0") {
                $operasionalminggu->jam_buka = "Tutup";
                $operasionalminggu->jam_tutup = "Tutup";
                $operasionalminggu->update();
            } else{
                $operasionalminggu->jam_buka = $minggubuka;
                $operasionalminggu->jam_tutup = $minggututup;
                $operasionalminggu->update();
            }
        }
        
        return redirect('admin/jenis/edit/'.$olahraga->id);
    }

    public function delete($id)
    {
        $olahraga = Olahraga::where('id', $id)->first();
        $operasional = Operasional::where('olahraga_id', $olahraga->id)->get();
        $lapangan = Lapangan::where('olahraga_id', $olahraga->id)->get();
        $jadwal = Jadwal::where('olahraga_id', $olahraga->id)->get();

        if ($olahraga->foto) {
            Storage::delete($olahraga->foto);
        }

        Operasional::destroy($operasional);
        Lapangan::destroy($lapangan);
        Jadwal::destroy($jadwal);
        $olahraga->delete();

        return redirect('admin/jenis');
    }
}
