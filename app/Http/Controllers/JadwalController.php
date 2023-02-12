<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        return view('admin.jadwal');
    }

    public function tambah()
    {
        return view('admin.jadwal.tambah');
    }

    public function edit()
    {
        return view('admin.jadwal.edit');
    }
}
