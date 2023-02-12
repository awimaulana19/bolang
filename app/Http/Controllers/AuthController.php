<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function dashboard()
    {
        $user = Auth::user();

        return view('admin.dashboard', compact('user'));
    }
}
