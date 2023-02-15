<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::get();
        return view('admin.transaksi', compact('transaksi'));
    }

    public function lihat($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        return view('admin.transaksi.lihat', compact('transaksi'));
    }
}
