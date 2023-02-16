<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $jadwal = Jadwal::where('user_id', $user)->get();
        return view('admin.jadwal', compact('jadwal'));
    }

    public function tambah()
    {
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.jadwal.tambah', compact('olahraga'));
    }

    public function edit($id)
    {
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        $jadwal = Jadwal::where('id', $id)->first();
        $lapangan = Lapangan::where('olahraga_id', $jadwal->olahraga_id)->get();

        $date = $jadwal->tanggal;
        $tanggal = Carbon::createFromLocaleFormat('d F Y', 'id', $date)->toDateString();

        return view('admin.jadwal.edit', compact('olahraga', 'jadwal', 'lapangan', 'tanggal'));
    }

    public function store(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $user_id = Auth::user()->id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai. " - " .$request->jamhabis;
        $harga = $request->harga;

        $jadwal = new Jadwal();

        $jadwal->user_id = $user_id;
        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->status = false;
        $jadwal->save();

        return redirect('admin/jadwal');
    }

    public function update(Request $request, $id)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai. " - " .$request->jamhabis;
        $harga = $request->harga;

        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->update();

        return redirect('admin/jadwal');
    }

    public function delete($id)
    {
        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->delete();

        return redirect('admin/jadwal');
    }
}
