<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Jadwal;
use App\Models\Transaksi;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckTransaksi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:status-transaksi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Transaksi';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $jadwals = Jadwal::where('status', true)->get();

        foreach ($jadwals as $jadwal) {
            $transaksi = Transaksi::where('jadwal_id', $jadwal->id)->first();

            if ($transaksi && !$transaksi->status) {
                $waktu_sekarang = Carbon::now();
                $waktu_booking = Carbon::createFromLocaleFormat('d F Y H:i:s', 'id', $transaksi->waktu_order)->format('Y-m-d H:i:s');
                $selisih_jam = $waktu_sekarang->diffInHours($waktu_booking);

                if ($selisih_jam >= 1) {
                    $jadwal->status = false;
                    $jadwal->save();
                }
            }
        }

        $this->info('Booking status has been checked and updated');
    }
}
