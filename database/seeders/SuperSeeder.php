<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SuperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'super',
            'nama' => 'Super Admin',
            'password' => bcrypt('bolang123'),
            'roles' => 'super',
            'whatsapp' => '082397032649',
            'email' => 'bolang.startup@gmail.com',
        ]);

        DB::table('konfigurasis')->insert([
            'konfigurasi' => 'rekening',
        ]);
    }
}
