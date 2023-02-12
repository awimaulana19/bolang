<?php

namespace App\Http\Controllers;

use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OlahragaController extends Controller
{
    public function index()
    {
        return view('admin.jenis');
    }

    public function tambah()
    {
        return view('admin.jenis.tambah');
    }

    public function operasional()
    {
        return view('admin.jenis.jam');
    }

    public function edit()
    {
        return view('admin.jenis.edit');
    }

    public function store(Request $request)
    {
        $tanggal = $request->tanggal;
        $jam = $request->jam;
        $user = Auth::user()->id;

        $jadwal = Olahraga::where('user_id', $user)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->get();

        if($jadwal->isEmpty()){
            $dokter = new Olahraga();

            $dokter->tanggal = $request->tanggal;
            $dokter->jam = $request->jam;
            $dokter->user_id = Auth::user()->id;

            $dokter->save();

            $dokter->nama = $dokter->user->nama;
            $dokter->update();

            // Alert::success('Berhasil', 'Jadwal Berhasil Dibuat');
        }else{
            // Alert::error('Gagal', 'Tanggal, Jam Sudah Ada Di Dokter ini');
        }

        return redirect('jadwal-dokter');

    }
}
