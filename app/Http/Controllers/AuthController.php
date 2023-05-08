<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use App\Models\Transaksi;
use App\Models\Operasional;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
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
            } else if (auth()->user()->roles == 'super') {
                return redirect('super/dashboard');
            } else {
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
                if (auth()->user()->email_verified_at == NULL) {
                    $user = auth()->user();
                    event(new Registered($user));
                    return redirect('/email/verify');
                } else {
                    return redirect('/');
                }
            } else {
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
        $request->validate([
            'nama' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();

        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roles = 'pengguna';

        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        event(new Registered($user));

        return redirect('/email/verify');
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

    public function showForgetPasswordForm()
    {
        return view('pengguna.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'Email Reset Password Telah Dikirim');
    }

    public function showResetPasswordForm($token)
    {
        return view('pengguna.forgetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:3|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Token Kadaluwarsa!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('message', 'Password Berhasil Diubah, Silahkan Login!');
    }
}
