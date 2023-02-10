<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix("/admin")->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/jenis', function () {
        return view('admin.jenis');
    });
    Route::get('/lapangan', function () {
        return view('admin.lapangan');
    });
    Route::get('/jadwal', function () {
        return view('admin.jadwal');
    });
    Route::get('/transaksi', function () {
        return view('admin.transaksi');
    });
});

Route::prefix("/super")->group(function () {
    Route::get('/user', function () {
        return view('admin.user');
    });
});

