<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwal;
use GuzzleHttp\Client;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Transaksi;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index()
    {
        $olahraga = Olahraga::where('rekomendasi', true)->inRandomOrder()->take(4)->get();
        $lapangan = Lapangan::where('promo', true)->inRandomOrder()->take(10)->get();
        return view('pengguna.home', compact('olahraga', 'lapangan'));
    }

    public function lapangan()
    {
        $futsal = Olahraga::where('jenis', 'Futsal')->inRandomOrder()->take(4)->get();
        $minisoccer = Olahraga::where('jenis', 'Mini Soccer')->inRandomOrder()->take(4)->get();
        $bulutangkis = Olahraga::where('jenis', 'Bulu Tangkis')->inRandomOrder()->take(4)->get();
        $basket = Olahraga::where('jenis', 'Basket')->inRandomOrder()->take(4)->get();
        $gym = Olahraga::where('jenis', 'Gym')->inRandomOrder()->take(4)->get();
        $tenis = Olahraga::where('jenis', 'Tenis')->inRandomOrder()->take(4)->get();
        $tenismeja = Olahraga::where('jenis', 'Tenis Meja')->inRandomOrder()->take(4)->get();

        return view('pengguna.lapangan', compact('futsal', 'minisoccer', 'bulutangkis', 'basket', 'gym', 'tenis', 'tenismeja'));
    }

    public function olahraga($jenis)
    {
        $olahraga = Olahraga::where('jenis', $jenis)->get();
        return view('pengguna.olahraga', compact('olahraga', 'jenis'));
    }

    public function cari(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $tanggal = Carbon::create($request->cari)->locale('id')->isoFormat('D MMMM Y');

        $lapangan = Jadwal::where('tanggal', $tanggal)->get();
        return view('pengguna.cari', compact('lapangan'));
    }

    public function promo()
    {
        $lapangan = Lapangan::where('promo', true)->get();
        return view('pengguna.promo', compact('lapangan'));
    }

    public function pilih($id)
    {
        $olahraga = Olahraga::where('id', $id)->first();
        return view('pengguna.pilihlapangan', compact('olahraga'));
    }

    public function booking($id)
    {
        return view('pengguna.booking', compact('id'));
    }

    public function dataJadwal($id)
    {
        $lapangan = Lapangan::where('id', $id)->first();
        $user = User::where('id', $lapangan->user_id)->first();
        $olahraga = Olahraga::where('id', $lapangan->olahraga_id)->first();
        $jadwal = Jadwal::where('lapangan_id', $lapangan->id)
            ->orderByRaw("CASE
        WHEN SUBSTRING_INDEX(jam, ' - ', 1) = '00:00' THEN 1
        ELSE 0
        END, jam")
            ->get();

        return response()->json([
            "success" => true,
            "dataUser" => $user,
            "dataOlahraga" => $olahraga,
            "dataLapangan" => $lapangan,
            "dataJadwal" => $jadwal,
        ]);
    }

    public function pesan(Request $request)
    {
        $pilihan = $request->input('jadwal');
        $jadwal = Jadwal::where('id', $pilihan)->first();
        $pembayaran = Konfigurasi::where('konfigurasi', 'rekening')->first();

        // $biaya_admin = mt_rand(0, 199) + 1;

        return view('pengguna.pemesanan', compact('jadwal', 'pembayaran'));
    }

    public function bayar($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('pengguna.pembayaran', compact('transaksi'));
    }

    public function konfirmasi($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();

        Mail::send('email.pemberitahuan', ['nama_pelanggan' => $transaksi->nama_pelanggan], function ($message) {
            $bolang = "awimaulana19@gmail.com";
            $message->to($bolang);
            $message->subject('Pemberitahuan Transaksi');
        });

        $nama_pelanggan = $transaksi->nama_pelanggan;
        $wa = "082397032649";

        $message = "Ada Transaksi Dari " . $nama_pelanggan . " Dengan Rincian\n\nJumlah Bayar : " . $transaksi->total . "\nTanggal : " . $transaksi->jadwal->tanggal . "\nJam : " . $transaksi->jadwal->jam . "\nJenis Olahraga : " . $transaksi->olahraga->jenis . "\nLapangan : " . $transaksi->lapangan->nama_lapangan . "\nTempat : " . $transaksi->user->namatempat;

        $client = new Client();
        $url = "http://8.215.24.202:8080/message";

        $body = [
            'phoneNumber' => $wa,
            'message' => $message,
        ];

        $client->request('POST', $url, [
            'form_params' => $body,
            'verify'  => false,
        ]);

        return redirect('/transaksi')->with([
            'berhasil' => 'Konfirmasi Berhasil',
            'infoberhasil' => 'Harap Menunggu, Transaksi Sedang Di Proses Silahkan Lakukan Konfirmasi Ulang Jika Memakan Banyak Waktu'
        ]);
    }

    public function transaksi()
    {
        $user = Auth::user()->id;
        $transaksiproses = Transaksi::where('pengguna_id', $user)->where('status', 0)->take(4)->latest()->get();
        $transaksiselesai = Transaksi::where('pengguna_id', $user)->where('status', 1)->take(4)->orderBy('updated_at', 'desc')->get();
        return view('pengguna.transaksi', compact('transaksiproses', 'transaksiselesai'));
    }

    public function etiket()
    {
        $user = Auth::user()->id;
        $transaksi = Transaksi::where('pengguna_id', $user)->where('status', 1)->take(3)->orderBy('updated_at', 'desc')->get();
        return view('pengguna.etiket', compact('transaksi'));
    }

    public function akun()
    {
        $user = Auth::user()->id;
        $akun = User::where('id', $user)->first();
        return view('pengguna.akun', compact('akun'));
    }

    public function simpan(Request $request, $id)
    {
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

    public function simpanFoto(Request $request, $id)
    {
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
