<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index () {
        $olahraga = Olahraga::inRandomOrder()->take(4)->get();
        $lapangan = Lapangan::inRandomOrder()->take(10)->get();
        return view('pengguna.home', compact('olahraga', 'lapangan'));
    }

    public function lapangan () {
        $futsal = Olahraga::where('jenis', 'Futsal')->inRandomOrder()->take(4)->get();
        $minisoccer = Olahraga::where('jenis', 'Mini Soccer')->inRandomOrder()->take(4)->get();
        $bulutangkis = Olahraga::where('jenis', 'Bulu Tangkis')->inRandomOrder()->take(4)->get();
        $basket = Olahraga::where('jenis', 'Basket')->inRandomOrder()->take(4)->get();
        $gym = Olahraga::where('jenis', 'Gym')->inRandomOrder()->take(4)->get();
        $tenis = Olahraga::where('jenis', 'Tenis')->inRandomOrder()->take(4)->get();
        $tenismeja = Olahraga::where('jenis', 'Tenis Meja')->inRandomOrder()->take(4)->get();

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

    public function konfirmasi($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();

        $wa = "082397032649";
        $nama_pelanggan = $transaksi->nama_pelanggan;

        $isi_pesan = "Ada Transaksi Dari " . $nama_pelanggan .
            " Dengan Jumlah Bayar, Jadwal, Di Lapangan, Tempat";

        $api_key   = '469d065c8788ab986e8486312fe68b8f9d21155b'; // API KEY Anda
        $id_device = '2077'; // ID DEVICE yang di SCAN (Sebagai pengirim)
        $url   = 'https://api.watsap.id/send-message'; // URL API
        $no_hp = $wa; // No.HP yang dikirim (No.HP Penerima)
        $pesan = $isi_pesan; // Pesan yang dikirim

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0); // batas waktu response
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_POST, 1);

        $data_post = [
            'id_device' => $id_device,
            'api-key' => $api_key,
            'no_hp'   => $no_hp,
            'pesan'   => $pesan
        ];

        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_post));
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        $response = curl_exec($curl);
        curl_close($curl);

        $testing = json_decode($response, true);

        // dd($data_post, $testing);
        
        if ($testing['kode'] == 200) {
            return redirect('/transaksi')->with([
                'berhasil' => 'Konfirmasi Berhasil',
                'infoberhasil' => 'Harap Menunggu, Transaksi Sedang Di Proses'
            ]);
        } else if ($testing['kode'] == 402) {
            $transaksi->delete();
            return redirect('/transaksi')->with([
                'gagal' => 'Transaksi Di Batalkan',
                'infogagal' => 'Kesalahan Sistem, Admin tidak terdaftar di Whatsapp'
            ]);
        } else if ($testing['kode'] == 403) {
            $transaksi->delete();
            return redirect('/transaksi')->with([
                'gagal' => 'Transaksi Di Batalkan',
                'infogagal' => 'Kesalahan Sistem, Harap SCAN QRCODE sebelum menggunakan API'
            ]);
        } else if ($testing['kode'] == 500) {
            $transaksi->delete();
            return redirect('/transaksi')->with([
                'gagal' => 'Transaksi Di Batalkan',
                'infogagal' => 'Gagal Konfirmasi'
            ]);
        } else if ($testing['kode'] == 300) {
            $transaksi->delete();
            return redirect('/transaksi')->with([
                'gagal' => 'Transaksi Di Batalkan',
                'infogagal' => 'Gagal Konfirmasi / Tidak ada hasil'
            ]);
        } else {
            $transaksi->delete();
            return redirect('/transaksi')->with([
                'gagal' => 'Transaksi Di Batalkan',
                'infogagal' => 'Gagal Konfirmasi, Kesalahan Pada Wa Gateway'
            ]);
        }
    }

    public function transaksi () {
        $user = Auth::user()->id;
        $transaksiproses = Transaksi::where('pengguna_id', $user)->where('status', 0)->get();
        $transaksiselesai = Transaksi::where('pengguna_id', $user)->where('status', 1)->get();
        return view('pengguna.transaksi', compact('transaksiproses', 'transaksiselesai'));
    }

    public function etiket () {
        $user = Auth::user()->id;
        $transaksi = Transaksi::where('pengguna_id', $user)->where('status', 1)->get();
        return view('pengguna.etiket', compact('transaksi'));
    }

    public function akun () {
        $user = Auth::user()->id;
        $akun = User::where('id', $user)->first();
        return view('pengguna.akun', compact('akun'));
    }

    public function simpan (Request $request, $id) {
        $akun = User::where('id', $id)->first();

        $akun->nama = $request->nama;
        $akun->username = $request->username;
        $akun->jenis_kelamin = $request->jenis_kelamin;
        $akun->whatsapp = $request->whatsapp;
        $akun->bulan_lahir = $request->bulan_lahir;
        $akun->tahun_lahir = $request->tahun_lahir;
        $akun->tanggal_lahir = $request->tanggal_lahir;
        $akun->sepak_bola = $request->sepak_bola ? true : false;
        $akun->mini_soccer = $request->mini_soccer ? true : false;
        $akun->futsal = $request->futsal ? true : false;
        $akun->bulu_tangkis = $request->bulu_tangkis ? true : false;
        $akun->basket = $request->basket ? true : false;
        $akun->voli = $request->voli ? true : false;
        $akun->fitnes = $request->fitnes ? true : false;
        $akun->tenis = $request->tenis ? true : false;
        $akun->baseball = $request->baseball ? true : false;
        $akun->lainnya = $request->lainnya ? true : false;
        $akun->update();

        return redirect('/akun');
    }

    public function simpanFoto (Request $request, $id) {
        $akun = User::where('id', $id)->first();

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $akun->foto = $request->file('foto')->store('foto-akun');
        }
        
        $akun->update();

        return redirect('/akun');
    }
}
