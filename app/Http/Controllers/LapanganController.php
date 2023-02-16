<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LapanganController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id; 
        $lapangan = Lapangan::where('user_id', $user)->get();
        return view('admin.lapangan', compact('lapangan'));
    }

    public function tambah()
    {
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.lapangan.tambah', compact('olahraga'));
    }

    public function edit($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.lapangan.edit', compact('lapangan', 'olahraga'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $olahraga_id = $request->olahraga_id;
        $nama_lapangan = $request->nama_lapangan;

        $lapangan = new Lapangan();

        $lapangan->user_id = $user_id;
        $lapangan->olahraga_id = $olahraga_id;
        $lapangan->nama_lapangan = $nama_lapangan;
        if ($request->file('foto')) {
            $lapangan->foto = $request->file('foto')->store('foto-lapangan');
        }
        $lapangan->save();

        return redirect('admin/lapangan');
    }

    public function update(Request $request, $id)
    {
        $olahraga_id = $request->olahraga_id;
        $nama_lapangan = $request->nama_lapangan;

        $lapangan = Lapangan::where('id', $id)->first();

        $lapangan->olahraga_id = $olahraga_id;
        $lapangan->nama_lapangan = $nama_lapangan;
        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $lapangan->foto = $request->file('foto')->store('foto-lapangan');
        }
        $lapangan->update();

        return redirect('admin/lapangan');
    }

    public function delete($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $jadwal = Jadwal::where('lapangan_id', $lapangan->id)->get();

        if ($lapangan->foto) {
            Storage::delete($lapangan->foto);
        }

        Jadwal::destroy($jadwal);
        $lapangan->delete();

        return redirect('admin/lapangan');
    }
}
