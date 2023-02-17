<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index () {
        $olahraga = Olahraga::get();
        $lapangan = Lapangan::get();
        return view('pengguna.home', compact('olahraga', 'lapangan'));
    }

    public function lapangan () {
        $futsal = Olahraga::where('jenis', 'Futsal')->get();
        $minisoccer = Olahraga::where('jenis', 'Mini Soccer')->get();
        $bulutangkis = Olahraga::where('jenis', 'Bulu Tangkis')->get();
        $basket = Olahraga::where('jenis', 'Basket')->get();
        $gym = Olahraga::where('jenis', 'Gym')->get();
        $tenis = Olahraga::where('jenis', 'Tenis')->get();
        $tenismeja = Olahraga::where('jenis', 'Tenis Meja')->get();

        return view('pengguna.lapangan', compact('futsal', 'minisoccer', 'bulutangkis', 'basket', 'gym', 'tenis', 'tenismeja'));
    }

    public function olahraga ($jenis) {
        $olahraga = Olahraga::where('jenis', $jenis)->get();
        return view('pengguna.olahraga', compact('olahraga', 'jenis'));
    }

    public function promo () {
        $lapangan = Lapangan::get();
        return view('pengguna.promo', compact('lapangan'));
    }

    public function pilih ($id) {
        $olahraga = Olahraga::where('id', $id)->first();
        return view('pengguna.pilihlapangan', compact('olahraga'));
    }
    
    public function booking ($id) {
        return view('pengguna.booking', compact('id'));
    }

    public function dataJadwal ($id) {
        $lapangan = Lapangan::where('id', $id)->first();
        $user = User::where('id', $lapangan->user_id)->first();
        $olahraga = Olahraga::where('id', $lapangan->olahraga_id)->first();
        $jadwal = Jadwal::where('lapangan_id', $lapangan->id)->get();

        return response()->json([
            "success" => true,
            "dataUser" => $user,
            "dataOlahraga" => $olahraga,
            "dataLapangan" => $lapangan,
            "dataJadwal" => $jadwal,
        ]);
    }

    public function pesan (Request $request) {
        $pilihan = $request->input('jadwal');
        $jadwal = Jadwal::where('id', $pilihan)->first();

        return view('pengguna.pemesanan', compact('jadwal'));
    }

    public function bayar ($id) {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('pengguna.pembayaran', compact('transaksi'));
    }

    public function akun () {
        
        return view('pengguna.akun');
    }
}
