<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('roles');
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->string('namatempat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('maps')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tahun_lahir')->nullable();
            $table->string('bulan_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->boolean('sepak_bola')->nullable();
            $table->boolean('mini_soccer')->nullable();
            $table->boolean('futsal')->nullable();
            $table->boolean('bulu_tangkis')->nullable();
            $table->boolean('basket')->nullable();
            $table->boolean('voli')->nullable();
            $table->boolean('fitnes')->nullable();
            $table->boolean('tenis')->nullable();
            $table->boolean('baseball')->nullable();
            $table->boolean('lainnya')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
