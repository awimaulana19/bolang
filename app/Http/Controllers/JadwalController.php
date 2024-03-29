<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Lapangan;
use App\Models\Olahraga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        if (Auth::user()->roles == 'admin') {
            $user = Auth::user()->id;
            $jadwal = Jadwal::where('user_id', $user)->orderBy(DB::raw("STR_TO_DATE(tanggal, '%d %M %Y')"), 'desc')->paginate(30);
        } elseif (Auth::user()->roles == 'super') {
            $jadwal = Jadwal::orderBy(DB::raw("STR_TO_DATE(tanggal, '%d %M %Y')"), 'desc')->paginate(30);
        }
        return view('admin.jadwal', compact('jadwal'));
    }

    public function search($search)
    {
        $query = Jadwal::query();

        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('tanggal', 'like', '%' . $search . '%')
                    ->orWhere('jam', 'like', '%' . $search . '%')
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery->where('namatempat', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('olahraga', function ($olahragaQuery) use ($search) {
                        $olahragaQuery->where('jenis', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('lapangan', function ($lapanganQuery) use ($search) {
                        $lapanganQuery->where('nama_lapangan', 'like', '%' . $search . '%');
                    });
            });
        }

        if (Auth::user()->roles == 'admin') {
            $user = Auth::user()->id;
            $jadwal = $query->where('user_id', $user)->orderBy(DB::raw("STR_TO_DATE(tanggal, '%d %M %Y')"), 'desc')->paginate(30);
        } else {
            $jadwal = $query->orderBy(DB::raw("STR_TO_DATE(tanggal, '%d %M %Y')"), 'desc')->paginate(30);
        }

        return view('admin.jadwal', compact('jadwal'));
    }

    public function tambah()
    {
        $user = Auth::user()->id;
        $olahraga = Olahraga::where('user_id', $user)->get();
        return view('admin.jadwal.tambah', compact('olahraga'));
    }

    public function tambahSuper()
    {
        $user = User::where('roles', 'admin')->get();
        return view('super.jadwal.tambah', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user()->id;
        $olahraga = Olahraga::where('user_id', $user)->get();
        $jadwal = Jadwal::where('id', $id)->first();
        $lapangan = Lapangan::where('olahraga_id', $jadwal->olahraga_id)->get();

        $date = $jadwal->tanggal;
        $tanggal = Carbon::createFromLocaleFormat('d F Y', 'id', $date)->toDateString();

        return view('admin.jadwal.edit', compact('olahraga', 'jadwal', 'lapangan', 'tanggal'));
    }

    public function editSuper($id)
    {
        $user = User::where('roles', 'admin')->get();
        $jadwal = Jadwal::where('id', $id)->first();
        $olahraga = Olahraga::where('user_id', $jadwal->user_id)->get();
        $lapangan = Lapangan::where('olahraga_id', $jadwal->olahraga_id)->get();

        $date = $jadwal->tanggal;
        $tanggal = Carbon::createFromLocaleFormat('d F Y', 'id', $date)->toDateString();

        return view('super.jadwal.edit', compact('user', 'olahraga', 'jadwal', 'lapangan', 'tanggal'));
    }

    public function store(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        if ($request->jammulai == "semua_jam") {
            for ($i = 0; $i < 24; $i++) {
                $start = sprintf("%02d:00", $i);
                $end = sprintf("%02d:00", ($i + 1) % 24);

                $schedule = [
                    'user_id' => Auth::user()->id,
                    'olahraga_id' => $request->olahraga_id,
                    'lapangan_id' => $request->lapangan_id,
                    'tanggal' => Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y'),
                    'jam' => $start . ' - ' . $end,
                    'harga' => $request->harga,
                    'dp' => $request->dp,
                    'status' => false
                ];

                $existingSchedule = Jadwal::where('user_id', $schedule['user_id'])
                    ->where('olahraga_id', $schedule['olahraga_id'])
                    ->where('lapangan_id', $schedule['lapangan_id'])
                    ->where('tanggal', $schedule['tanggal'])
                    ->where('jam', $schedule['jam'])
                    ->first();

                if (!$existingSchedule) {
                    $jadwal = new Jadwal();

                    $jadwal->user_id = $schedule['user_id'];
                    $jadwal->olahraga_id = $schedule['olahraga_id'];
                    $jadwal->lapangan_id = $schedule['lapangan_id'];
                    $jadwal->tanggal = $schedule['tanggal'];
                    $jadwal->jam = $schedule['jam'];
                    $jadwal->harga = $schedule['harga'];
                    $jadwal->dp = $schedule['dp'];
                    $jadwal->status = $schedule['status'];
                    $jadwal->save();
                }
            }

            return redirect('admin/jadwal');
        } else {
            $jam = $request->jammulai . " - " . $request->jamhabis;
        }

        $user_id = Auth::user()->id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $harga = $request->harga;
        $dp = $request->dp;

        $rules = Jadwal::where('user_id', $user_id)
            ->where('olahraga_id', $olahraga_id)
            ->where('lapangan_id', $lapangan_id)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->first();

        if (!$rules) {
            $jadwal = new Jadwal();

            $jadwal->user_id = $user_id;
            $jadwal->olahraga_id = $olahraga_id;
            $jadwal->lapangan_id = $lapangan_id;
            $jadwal->tanggal = $tanggal;
            $jadwal->jam = $jam;
            $jadwal->harga = $harga;
            $jadwal->dp = $dp;
            $jadwal->status = false;
            $jadwal->save();

            return redirect('admin/jadwal');
        } else {
            return redirect('admin/jadwal')->with([
                'gagal' => 'Gagal',
                'infogagal' => 'Jadwal Sudah Ada'
            ]);
        }
    }

    public function storeSuper(Request $request)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        if ($request->jammulai == "semua_jam") {
            for ($i = 8; $i < 22; $i++) {
                $start = sprintf("%02d:00", $i);
                $end = sprintf("%02d:00", ($i + 1) % 24);

                $schedule = [
                    'user_id' => $request->user_id,
                    'olahraga_id' => $request->olahraga_id,
                    'lapangan_id' => $request->lapangan_id,
                    'tanggal' => Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y'),
                    'jam' => $start . ' - ' . $end,
                    'harga' => $request->harga,
                    'dp' => $request->dp,
                    'status' => false
                ];

                $existingSchedule = Jadwal::where('user_id', $schedule['user_id'])
                    ->where('olahraga_id', $schedule['olahraga_id'])
                    ->where('lapangan_id', $schedule['lapangan_id'])
                    ->where('tanggal', $schedule['tanggal'])
                    ->where('jam', $schedule['jam'])
                    ->first();

                if (!$existingSchedule) {
                    $jadwal = new Jadwal();

                    $jadwal->user_id = $schedule['user_id'];
                    $jadwal->olahraga_id = $schedule['olahraga_id'];
                    $jadwal->lapangan_id = $schedule['lapangan_id'];
                    $jadwal->tanggal = $schedule['tanggal'];
                    $jadwal->jam = $schedule['jam'];
                    $jadwal->harga = $schedule['harga'];
                    $jadwal->dp = $schedule['dp'];
                    $jadwal->status = $schedule['status'];
                    $jadwal->save();
                }
            }

            return redirect('super/jadwal');
        } else {
            $jam = $request->jammulai . " - " . $request->jamhabis;
        }

        $user_id = $request->user_id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $harga = $request->harga;
        $dp = $request->dp;

        $rules = Jadwal::where('user_id', $user_id)
            ->where('olahraga_id', $olahraga_id)
            ->where('lapangan_id', $lapangan_id)
            ->where('tanggal', $tanggal)
            ->where('jam', $jam)
            ->first();

        if (!$rules) {
            $jadwal = new Jadwal();

            $jadwal->user_id = $user_id;
            $jadwal->olahraga_id = $olahraga_id;
            $jadwal->lapangan_id = $lapangan_id;
            $jadwal->tanggal = $tanggal;
            $jadwal->jam = $jam;
            $jadwal->harga = $harga;
            $jadwal->dp = $dp;
            $jadwal->status = false;
            $jadwal->save();

            return redirect('super/jadwal');
        } else {
            return redirect('super/jadwal')->with([
                'gagal' => 'Gagal',
                'infogagal' => 'Jadwal Sudah Ada'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai . " - " . $request->jamhabis;
        $harga = $request->harga;
        $dp = $request->dp;

        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->dp = $dp;
        $jadwal->update();

        return redirect('admin/jadwal');
    }

    public function updateSuper(Request $request, $id)
    {
        setlocale(LC_TIME, 'id_ID');
        Carbon::setLocale('id');

        $user_id = $request->user_id;
        $olahraga_id = $request->olahraga_id;
        $lapangan_id = $request->lapangan_id;
        $tanggal = Carbon::create($request->tanggal)->locale('id')->isoFormat('D MMMM Y');
        $jam = $request->jammulai . " - " . $request->jamhabis;
        $harga = $request->harga;
        $dp = $request->dp;

        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->user_id = $user_id;
        $jadwal->olahraga_id = $olahraga_id;
        $jadwal->lapangan_id = $lapangan_id;
        $jadwal->tanggal = $tanggal;
        $jadwal->jam = $jam;
        $jadwal->harga = $harga;
        $jadwal->dp = $dp;
        $jadwal->update();

        return redirect('super/jadwal');
    }

    public function delete($id)
    {
        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->delete();

        if (Auth::user()->roles == 'admin') {
            return redirect('admin/jadwal');
        } elseif (Auth::user()->roles == 'super') {
            return redirect('super/jadwal');
        }
    }

    public function booked($id)
    {
        $jadwal = Jadwal::where('id', $id)->first();

        $jadwal->status = !$jadwal->status;
        $jadwal->update();

        if (Auth::user()->roles == 'admin') {
            return redirect('admin/jadwal');
        } elseif (Auth::user()->roles == 'super') {
            return redirect('super/jadwal');
        }
    }
}
