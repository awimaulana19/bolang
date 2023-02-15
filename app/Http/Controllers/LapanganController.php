<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LapanganController extends Controller
{
    public function index()
    {
        $lapangan = Lapangan::get();
        return view('admin.lapangan', compact('lapangan'));
    }

    public function tambah()
    {
        $olahraga = Olahraga::get();
        return view('admin.lapangan.tambah', compact('olahraga'));
    }

    public function edit($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $olahraga = Olahraga::get();
        return view('admin.lapangan.edit', compact('lapangan', 'olahraga'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $olahraga_id = $request->olahraga_id;
        $nama_lapangan = $request->nama_lapangan;
        $foto = $request->foto;

        $lapangan = new Lapangan();

        $lapangan->user_id = $user_id;
        $lapangan->olahraga_id = $olahraga_id;
        $lapangan->nama_lapangan = $nama_lapangan;
        $lapangan->foto = $foto;
        $lapangan->save();

        return redirect('admin/lapangan');
    }

    public function update(Request $request, $id)
    {
        $olahraga_id = $request->olahraga_id;
        $nama_lapangan = $request->nama_lapangan;
        $foto = $request->foto;

        $lapangan = Lapangan::where('id', $id)->first();

        $lapangan->olahraga_id = $olahraga_id;
        $lapangan->nama_lapangan = $nama_lapangan;
        $lapangan->foto = $foto;
        $lapangan->update();

        return redirect('admin/lapangan');
    }

    public function delete($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $jadwal = Jadwal::where('lapangan_id', $lapangan->id)->get();

        Jadwal::destroy($jadwal);
        $lapangan->delete();

        return redirect('admin/lapangan');
    }
}
