<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles == 'admin') {
            $user = Auth::user()->id;
            $jadwal = Jadwal::where('user_id', $user)->get();
        } elseif (Auth::user()->roles == 'super') {
            $jadwal = Jadwal::get();
        }
        return view('admin.jadwal', compact('jadwal'));
    }

    public function tambah()
    {
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.jadwal.tambah', compact('olahraga'));
    }

    public function tambahSuper()
    {
        $user = User::where('roles', 'admin')->get();
        return view('super.jadwal.tambah', compact('user'));
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

    public function editSuper($id)
    {
        $user = User::where('roles', 'admin')->get();
        $jadwal = Jadwal::where('id', $id)->first();
        $olahraga = Olahraga::where('user_id', $jadwal->user_id)->get();
        $lapangan = Lapangan::where('olahraga_id', $jadwal->olahraga_id)->get();

        $date = $jadwal->tanggal;
        $tanggal = Carbon::createFromLocaleFormat('d F Y', 'id', $date)->toDateString();

        return view('super.jadwal.edit', compact('user', 'olahraga', 'jadwal', 'lapangan', 'tanggal'));
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
        $dp = $request->dp;

        $rules = Jadwal::where('user_id', $user_id)
            ->where('olahraga_id', $olahraga_id)
            ->where('lapangan_id', $lapangan_id)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->first();

        if (!$rules) {
            $jadwal = new Jadwal();

            $jadwal->user_id = $user_id;
            $jadwal->olahraga_id = $olahraga_id;
            $jadwal->lapangan_id = $lapangan_id;
            $jadwal->tanggal = $tanggal;
            $jadwal->jam = $jam;
            $jadwal->harga = $harga;
            $jadwal->dp = $dp;
            $jadwal->status = false;
            $jadwal->save();

            return redirect('admin/jadwal');
        }else{
            return redirect('admin/jadwal')->with([
                'gagal' => 'Gagal',
                'infogagal' => 'Jadwal Sudah Ada'
            ]);
        }
    }

    public function storeSuper(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $user_id = $request->user_id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai. " - " .$request->jamhabis;
        $harga = $request->harga;
        $dp = $request->dp;

        $rules = Jadwal::where('user_id', $user_id)
            ->where('olahraga_id', $olahraga_id)
            ->where('lapangan_id', $lapangan_id)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->first();

        if (!$rules) {
            $jadwal = new Jadwal();

            $jadwal->user_id = $user_id;
            $jadwal->olahraga_id = $olahraga_id;
            $jadwal->lapangan_id = $lapangan_id;
            $jadwal->tanggal = $tanggal;
            $jadwal->jam = $jam;
            $jadwal->harga = $harga;
            $jadwal->dp = $dp;
            $jadwal->status = false;
            $jadwal->save();

            return redirect('super/jadwal');
        }else{
            return redirect('super/jadwal')->with([
                'gagal' => 'Gagal',
                'infogagal' => 'Jadwal Sudah Ada'
            ]);
        }
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
        $dp = $request->dp;

        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->dp = $dp;
        $jadwal->update();

        return redirect('admin/jadwal');
    }

    public function updateSuper(Request $request, $id)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $user_id = $request->user_id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai. " - " .$request->jamhabis;
        $harga = $request->harga;
        $dp = $request->dp;

        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->user_id = $user_id;
        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->dp = $dp;
        $jadwal->update();

        return redirect('super/jadwal');
    }

    public function delete($id)
    {
        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->delete();

        if (Auth::user()->roles == 'admin') {
            return redirect('admin/jadwal');
        } elseif (Auth::user()->roles == 'super') {
            return redirect('super/jadwal');
        }
    }
}
