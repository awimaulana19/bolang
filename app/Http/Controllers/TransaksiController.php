<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Transaksi;
use App\Models\Konfigurasi;
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
        $request->validate([
            'jadwal_id' => 'required|unique:transaksis',
        ]);

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
        if ($request->jenis_transaksi == "Booking Lapangan") {
            $harga_lapangan = $jadwal->harga;
        }else if ($request->jenis_transaksi == "DP Lapangan") {
            $harga_lapangan = $jadwal->dp;
        }
        $biaya_admin = 0;
        // $biaya_admin = mt_rand(0, 199) + 1;
        // $biaya_admin = $request->biaya_admin;
        $total = $harga_lapangan + $biaya_admin;
        $order_id = 'ORD'.strtoupper(substr(str_replace(".", "", uniqid('', true)), 0, 10));
        $status = false;
        $jenis_transaksi = $request->jenis_transaksi;
        $waktu_order = $request->order_datetime;
        $batas_pembayaran = $request->batas_pembayaran;

        $konfigurasi = Konfigurasi::where('konfigurasi', 'rekening')->first();

        if ($jenis_pembayaran === "BRI") {
            $nomor_pembayaran = $konfigurasi->bri;
        }
        elseif ($jenis_pembayaran === "BNI") {
            $nomor_pembayaran = $konfigurasi->bni;
        }
        elseif ($jenis_pembayaran === "BCA") {
            $nomor_pembayaran = $konfigurasi->bca;
        }
        elseif ($jenis_pembayaran === "MANDIRI") {
            $nomor_pembayaran = $konfigurasi->mandiri;
        }
        elseif ($jenis_pembayaran === "GOPAY") {
            $nomor_pembayaran = $konfigurasi->gopay;
        }
        elseif ($jenis_pembayaran === "DANA") {
            $nomor_pembayaran = $konfigurasi->dana;
        }
        elseif ($jenis_pembayaran === "OVO") {
            $nomor_pembayaran = $konfigurasi->ovo;
        }
        elseif ($jenis_pembayaran === "LINKAJA") {
            $nomor_pembayaran = $konfigurasi->linkaja;
        }

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

    public function konfirmasiSuper($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();

        $transaksi->status = true;
        $transaksi->update();
        return redirect('/super/transaksi');
    }

    public function batalSuper($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        $jadwal = Jadwal::where('id', $transaksi->jadwal_id)->first();

        $jadwal->status = false;
        $jadwal->update();

        $transaksi->delete();

        return redirect('/super/transaksi');
    }

    public function konfigurasi()
    {
        $konfigurasi = Konfigurasi::where('konfigurasi', 'rekening')->first();
        return view('super.transaksi.konfigurasi', compact('konfigurasi'));
    }

    public function updateKonfigurasi(Request $request ,$id)
    {
        $konfigurasi = Konfigurasi::where('id', $id)->first();
        
        $konfigurasi->bri = $request->bri;
        $konfigurasi->bni = $request->bni;
        $konfigurasi->bca = $request->bca;
        $konfigurasi->mandiri = $request->mandiri;
        $konfigurasi->gopay = $request->gopay;
        $konfigurasi->dana = $request->dana;
        $konfigurasi->ovo = $request->ovo;
        $konfigurasi->linkaja = $request->linkaja;

        $konfigurasi->update();

        return redirect('super/transaksi');
    }
}
