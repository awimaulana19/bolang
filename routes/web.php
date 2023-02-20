<?php

use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TransaksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PenggunaController::class, 'index']);
Route::get('/lapangan', [PenggunaController::class, 'lapangan']);
Route::get('/promo', [PenggunaController::class, 'promo']);
Route::get('/olahraga/{jenis}', [PenggunaController::class, 'olahraga']);

Route::middleware(['guest'])->group(function () {
    Route::get('/registrasi', [AuthController::class, 'registPengguna']);
    Route::post('/registrasi', [AuthController::class, 'registAction']);
    Route::get('/login', [AuthController::class, 'loginPengguna'])->name('loginPengguna');
    Route::post('/login', [AuthController::class, 'actionLogin']);
    Route::get('/admin', [AuthController::class, 'login']);
    Route::post('/admin', [AuthController::class, 'login_action']);
});

Route::group(['middleware' => ['auth', 'OnlyPengguna']], function () {
    Route::get('/keluar', [AuthController::class, 'logoutPengguna']);
    Route::get('/pilih/{id}', [PenggunaController::class, 'pilih']);
    Route::get('/booking/{id}', [PenggunaController::class, 'booking']);
    Route::get('/pesan', [PenggunaController::class, 'pesan']);
    Route::post('/pesan', [TransaksiController::class, 'store']);
    Route::get('/bayar/{id}', [PenggunaController::class, 'bayar']);
    Route::get('/transaksi', [PenggunaController::class, 'transaksi']);
    Route::get('/konfirmasi/{id}', [PenggunaController::class, 'konfirmasi']);
    Route::get('/etiket', [PenggunaController::class, 'etiket']);
    Route::get('/akun', [PenggunaController::class, 'akun']);
    Route::post('/akun/{id}', [PenggunaController::class, 'simpan']);
    Route::post('/akun/foto/{id}', [PenggunaController::class, 'simpanFoto']);
});

Route::group(['middleware' => ['auth', 'OnlyAdmin']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::prefix("/admin")->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboard']);
        Route::get('/jenis', [OlahragaController::class, 'index']);
        Route::get('/jenis/tambah', [OlahragaController::class, 'tambah']);
        Route::post('/jenis/tambah', [OlahragaController::class, 'store']);
        Route::get('/jenis/edit/{id}', [OlahragaController::class, 'edit']);
        Route::post('/jenis/edit/{id}', [OlahragaController::class, 'update']);
        Route::get('/jenis/delete/{id}', [OlahragaController::class, 'delete']);
        Route::get('/jenis/operasional/{id}', [OlahragaController::class, 'operasional']);
        Route::post('/jenis/operasional/{id}', [OlahragaController::class, 'storeOperasional']);
        Route::get('/lapangan', [LapanganController::class, 'index']);
        Route::get('/lapangan/tambah', [LapanganController::class, 'tambah']);
        Route::post('/lapangan/tambah', [LapanganController::class, 'store']);
        Route::get('/lapangan/edit/{id}', [LapanganController::class, 'edit']);
        Route::post('/lapangan/edit/{id}', [LapanganController::class, 'update']);
        Route::get('/lapangan/delete/{id}', [LapanganController::class, 'delete']);
        Route::get('/jadwal', [JadwalController::class, 'index']);
        Route::get('/jadwal/tambah', [JadwalController::class, 'tambah']);
        Route::post('/jadwal/tambah', [JadwalController::class, 'store']);
        Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
        Route::post('/jadwal/edit/{id}', [JadwalController::class, 'update']);
        Route::get('/jadwal/delete/{id}', [JadwalController::class, 'delete']);
        Route::get('/transaksi', [TransaksiController::class, 'index']);
        Route::get('/transaksi/lihat/{id}', [TransaksiController::class, 'lihat']);
    });
});

Route::group(['middleware' => ['auth', 'OnlySuper']], function () {
    Route::get('/logoutsuper', [AuthController::class, 'logout']);
    Route::prefix("/super")->group(function () {
        Route::get('/dashboard', [AuthController::class, 'dashboardSuper']);
        Route::get('/user', [AuthController::class, 'user']);
        Route::get('/user/tambah', [AuthController::class, 'tambah']);
        Route::post('/user/tambah', [AuthController::class, 'store']);
        Route::get('/user/edit/{id}', [AuthController::class, 'edit']);
        Route::post('/user/edit/{id}', [AuthController::class, 'update']);
        Route::get('/user/delete/{id}', [AuthController::class, 'delete']);
        Route::get('/jenis', [OlahragaController::class, 'index']);
        Route::get('/jenis/rekomendasi/{id}', [OlahragaController::class, 'rekomendasiSuper']);
        Route::get('/jenis/batalrekomendasi/{id}', [OlahragaController::class, 'batalRekomendasiSuper']);
        Route::get('/jenis/tambah', [OlahragaController::class, 'tambahSuper']);
        Route::post('/jenis/tambah', [OlahragaController::class, 'storeSuper']);
        Route::get('/jenis/edit/{id}', [OlahragaController::class, 'editSuper']);
        Route::post('/jenis/edit/{id}', [OlahragaController::class, 'updateSuper']);
        Route::get('/jenis/delete/{id}', [OlahragaController::class, 'delete']);
        Route::get('/jenis/operasional/{id}', [OlahragaController::class, 'operasionalSuper']);
        Route::post('/jenis/operasional/{id}', [OlahragaController::class, 'storeOperasionalSuper']);
        Route::get('/lapangan', [LapanganController::class, 'index']);
        Route::get('/lapangan/promo/{id}', [LapanganController::class, 'promoSuper']);
        Route::get('/lapangan/batalpromo/{id}', [LapanganController::class, 'batalPromoSuper']);
        Route::get('/lapangan/tambah', [LapanganController::class, 'tambahSuper']);
        Route::post('/lapangan/tambah', [LapanganController::class, 'storeSuper']);
        Route::get('/lapangan/edit/{id}', [LapanganController::class, 'editSuper']);
        Route::post('/lapangan/edit/{id}', [LapanganController::class, 'updateSuper']);
        Route::get('/lapangan/delete/{id}', [LapanganController::class, 'delete']);
        Route::get('/jadwal', [JadwalController::class, 'index']);
        Route::get('/jadwal/tambah', [JadwalController::class, 'tambahSuper']);
        Route::post('/jadwal/tambah', [JadwalController::class, 'storeSuper']);
        Route::get('/jadwal/edit/{id}', [JadwalController::class, 'editSuper']);
        Route::post('/jadwal/edit/{id}', [JadwalController::class, 'updateSuper']);
        Route::get('/jadwal/delete/{id}', [JadwalController::class, 'delete']);
        Route::get('/transaksi', [TransaksiController::class, 'index']);
        Route::get('/transaksi/konfigurasi', [TransaksiController::class, 'konfigurasi']);
        Route::post('/transaksi/konfigurasi/{id}', [TransaksiController::class, 'updateKonfigurasi']);
        Route::get('/transaksi/lihat/{id}', [TransaksiController::class, 'lihatSuper']);
        Route::get('/transaksi/konfirmasi/{id}', [TransaksiController::class, 'konfirmasiSuper']);
        Route::get('/transaksi/batal/{id}', [TransaksiController::class, 'batalSuper']);
    });
});

Route::get('/lapanganlist', function (Request $request) {
    $olahraga = $request->input('olahraga');
  
    $lapangan = Lapangan::where('olahraga_id', '=', $olahraga)->get();
  
    return response()->json($lapangan);
  });

Route::get('/olahragalist', function (Request $request) {
    $user = $request->input('user');
  
    $olahraga = Olahraga::where('user_id', '=', $user)->get();
  
    return response()->json($olahraga);
  });

