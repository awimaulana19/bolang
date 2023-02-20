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
            'nama' => 'Awi',
            'password' => bcrypt('super'),
            'roles' => 'super',
            'whatsapp' => '082397032649',
            'email' => 'awi@gmail.com',
        ]);

        DB::table('konfigurasis')->insert([
            'konfigurasi' => 'rekening',
        ]);

        DB::table('users')->insert([
            'namatempat' => 'Kakanta',
            'alamat' => 'Antang',
            'email' => 'kakanta@gmail.com',
            'username' => 'kakanta',
            'nama' => 'Adam',
            'password' => bcrypt('awi123'),
            'roles' => 'admin',
            'whatsapp' => '082397032649',
            'instagram' => 'kakanta123',
            'lokasi' => 'Jl. Antang',
        ]);

        DB::table('users')->insert([
            'namatempat' => 'Aeropala',
            'alamat' => 'Samata',
            'email' => 'aeropala@gmail.com',
            'username' => 'aeropala',
            'nama' => 'Sumi',
            'password' => bcrypt('awi123'),
            'roles' => 'admin',
            'whatsapp' => '085298564285',
            'instagram' => 'aeropala123',
            'lokasi' => 'Jl. Hertasning',
        ]);
    }
}
