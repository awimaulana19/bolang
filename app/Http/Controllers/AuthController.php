<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
                return redirect('super/user');
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
}
