<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        if (Auth::user()->roles == 'admin') {
            $user = Auth::user()->id; 
            $lapangan = Lapangan::where('user_id', $user)->get();
        } elseif (Auth::user()->roles == 'super') {
            $lapangan = Lapangan::get();
        }
        return view('admin.lapangan', compact('lapangan'));
    }

    public function tambah()
    {
        $user = Auth::user()->id; 
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.lapangan.tambah', compact('olahraga'));
    }

    public function tambahSuper()
    {
        $user = User::where('roles', 'admin')->get();
        return view('super.lapangan.tambah', compact('user'));
    }

    public function editSuper($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $olahraga = Olahraga::where('user_id', $lapangan->user_id)->get();
        $user = User::where('roles', 'admin')->get();
        return view('super.lapangan.edit', compact('lapangan', 'user', 'olahraga'));
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

    public function storeSuper(Request $request)
    {
        $user_id = $request->user_id;
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

        return redirect('super/lapangan');
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

    public function updateSuper(Request $request, $id)
    {
        $user_id = $request->user_id;
        $olahraga_id = $request->olahraga_id;
        $nama_lapangan = $request->nama_lapangan;

        $lapangan = Lapangan::where('id', $id)->first();

        $lapangan->user_id = $user_id;
        $lapangan->olahraga_id = $olahraga_id;
        $lapangan->nama_lapangan = $nama_lapangan;
        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $lapangan->foto = $request->file('foto')->store('foto-lapangan');
        }
        $lapangan->update();

        return redirect('super/lapangan');
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

        if (Auth::user()->roles == 'admin') {
            return redirect('admin/lapangan');
        } elseif (Auth::user()->roles == 'super') {
            return redirect('super/lapangan');
        }
        
    }

    public function promoSuper($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();

        $lapangan->promo = true;
        $lapangan->update();
        return redirect('/super/lapangan');
    }

    public function batalPromoSuper($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();

        $lapangan->promo = false;
        $lapangan->update();
        return redirect('/super/lapangan');
    }
}
