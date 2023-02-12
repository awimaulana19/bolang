<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LapanganController extends Controller
{
    public function index()
    {
        return view('admin.lapangan');
    }

    public function tambah()
    {
        return view('admin.lapangan.tambah');
    }

    public function edit()
    {
        return view('admin.lapangan.edit');
    }
}
