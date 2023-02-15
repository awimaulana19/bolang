<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\TransaksiController;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('pengguna.home');
});

Route::get('/registrasi', function () {
    return view('pengguna.regist');
});

Route::get('/login', function () {
    return view('pengguna.login');
});

Route::get('/akun', function () {
    return view('pengguna.akun');
});

Route::get('/promo', function () {
    return view('pengguna.promo');
});

Route::get('/etiket', function () {
    return view('pengguna.etiket');
});

Route::get('/transaksi', function () {
    return view('pengguna.transaksi');
});

Route::get('/lapangan', function () {
    return view('pengguna.lapangan');
});

Route::get('/olahraga', function () {
    return view('pengguna.olahraga');
});

Route::get('/pilih', function () {
    return view('pengguna.pilihlapangan');
});

Route::get('/booking', function () {
    return view('pengguna.booking');
});

Route::get('/pesan', function () {
    return view('pengguna.pemesanan');
});

Route::get('/bayar', function () {
    return view('pengguna.pembayaran');
});

Route::get('/admin', [AuthController::class, 'login']);
Route::post('/admin', [AuthController::class, 'login_action']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['middleware' => ['auth', 'OnlyAdmin']], function () {
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
    Route::prefix("/super")->group(function () {
        Route::get('/user', function () {
            return view('super.user');
        });
    });
});

Route::get('/lapanganlist', function (Request $request) {
    $olahraga = $request->input('olahraga');
  
    $lapangan = Lapangan::where('olahraga_id', '=', $olahraga)->get();
  
    return response()->json($lapangan);
  });

