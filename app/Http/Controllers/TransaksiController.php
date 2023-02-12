<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('admin.transaksi');
    }

    public function lihat()
    {
        return view('admin.transaksi.lihat');
    }
}
