<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Transaksi;
use App\Models\Operasional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.loginAdmin');
    }

    public function login_action(Request $request)
    {
        
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if (auth()->user()->roles == 'admin') {
                return redirect('admin/dashboard');
            }else if (auth()->user()->roles == 'super') {
                return redirect('super/dashboard');
            }else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()->with('pesan-danger', 'Username atau Password anda salah');
            }
        }
        return back()->with('pesan-danger', 'Username atau Password anda salah');
    }

    public function actionLogin(Request $request)
    {
        if (Auth::attempt(['username' => $request->useremail, 'password' => $request->password]) || Auth::attempt(['email' => $request->useremail, 'password' => $request->password])) {
            if (auth()->user()->roles == 'pengguna') {
                return redirect('/');
            }
            else{
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()->with('pesan-danger', 'Username atau Password anda salah');
            }
        }
        return back()->with('pesan-danger', 'Username atau Password anda salah');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }

    public function logoutPengguna(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function dashboard()
    {
        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }

    public function dashboardSuper()
    {
        $user = User::where('roles', 'admin')->get();
        $pengguna = User::where('roles', 'pengguna')->get();
        $olahraga = Olahraga::get();
        $lapangan = Lapangan::get();
        $transaksi = Transaksi::get();

        return view('super.dashboard', compact('olahraga', 'lapangan', 'transaksi', 'user', 'pengguna'));
    }

    public function registPengguna()
    {
        return view('pengguna.regist');
    }

    public function registAction(Request $request)
    {
        $user = new User();

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roles = 'pengguna';

        $user->save();

        return redirect('/login');
    }

    public function loginPengguna()
    {
        return view('pengguna.login');
    }

    public function user()
    {
        $user = User::where('roles', 'admin')->get();
        return view('super.user', compact('user'));
    }

    public function tambah()
    {
        return view('super.user.tambah');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('super.user.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $user = new User();

        $user->nama = $request->nama;
        $user->namatempat = $request->namatempat;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->alamat = $request->alamat;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->instagram = $request->instagram;
        $user->lokasi = $request->lokasi;
        $user->maps = $request->maps;
        $user->roles = 'admin';
        $user->save();

        return redirect('super/user');
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();

        $user->nama = $request->nama;
        $user->namatempat = $request->namatempat;
        $user->username = $request->username;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->alamat = $request->alamat;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->instagram = $request->instagram;
        $user->lokasi = $request->lokasi;
        $user->maps = $request->maps;
        $user->update();

        return redirect('super/user');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();

        $olahraga = Olahraga::where('user_id', $user->id)->get();
        $operasional = Operasional::where('user_id', $user->id)->get();
        $lapangan = Lapangan::where('user_id', $user->id)->get();
        $jadwal = Jadwal::where('user_id', $user->id)->get();

        foreach ($olahraga as $item) {
            if ($item->foto) {
                Storage::delete($item->foto);
            }
        }

        foreach ($lapangan as $item) {
            if ($item->foto) {
                Storage::delete($item->foto);
            }
        }

        Olahraga::destroy($olahraga);
        Operasional::destroy($operasional);
        Lapangan::destroy($lapangan);
        Jadwal::destroy($jadwal);
        $user->delete();

        return redirect('super/user');
    }
}
