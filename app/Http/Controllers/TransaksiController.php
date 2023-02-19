<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles == 'admin') {
            $user = Auth::user()->id;
            $transaksi = Transaksi::where('user_id', $user)->get();
        } elseif (Auth::user()->roles == 'super') {
            $transaksi = Transaksi::get();
        }

        return view('admin.transaksi', compact('transaksi'));
    }

    public function lihat($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.lihat', compact('transaksi'));
    }

    public function lihatSuper($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('super.transaksi.lihat', compact('transaksi'));
    }

    public function store(Request $request)
    {
        $jadwal = Jadwal::where('id', $request->jadwal_id)->first();
        $jadwal->status = true;
        $jadwal->update();

        $user_id = $jadwal->user_id;
        $pengguna_id = Auth::user()->id;
        $olahraga_id = $jadwal->olahraga_id;
        $lapangan_id = $jadwal->lapangan_id;
        $jadwal_id = $jadwal->id;
        $nama_pelanggan = $request->nama_pelanggan;
        $nomor_hp = $request->nomor_hp;
        $email = $request->email;
        $catatan = $request->catatan;
        $jenis_pembayaran = $request->jenis_pembayaran;
        $harga_lapangan = $jadwal->harga;
        $biaya_admin = 0;
        $total = $harga_lapangan + $biaya_admin;
        $order_id = 'ORD'.strtoupper(substr(str_replace(".", "", uniqid('', true)), 0, 10));
        // $order_id = uniqid('ord');
        $status = false;
        $jenis_transaksi = "Booking Lapangan";
        $waktu_order = $request->order_datetime;
        $batas_pembayaran = $request->batas_pembayaran;
        $nomor_pembayaran = "Coming Soon";

        $transaksi = new Transaksi();

        $transaksi->user_id = $user_id;
        $transaksi->pengguna_id = $pengguna_id;
        $transaksi->olahraga_id = $olahraga_id;
        $transaksi->lapangan_id = $lapangan_id;
        $transaksi->jadwal_id = $jadwal_id;
        $transaksi->nama_pelanggan = $nama_pelanggan;
        $transaksi->nomor_hp = $nomor_hp;
        $transaksi->email = $email;
        $transaksi->catatan = $catatan;
        $transaksi->jenis_pembayaran = $jenis_pembayaran;
        $transaksi->harga_lapangan = $harga_lapangan;
        $transaksi->biaya_admin = $biaya_admin;
        $transaksi->total = $total;
        $transaksi->order_id = $order_id;
        $transaksi->status = $status;
        $transaksi->jenis_transaksi = $jenis_transaksi;
        $transaksi->waktu_order = $waktu_order;
        $transaksi->batas_pembayaran = $batas_pembayaran;
        $transaksi->nomor_pembayaran = $nomor_pembayaran;

        $transaksi->save();

        return redirect('/bayar/'.$transaksi->id);
    }
}
