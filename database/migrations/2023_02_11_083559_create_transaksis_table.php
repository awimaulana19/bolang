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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('pengguna_id');
            $table->foreignId('olahraga_id');
            $table->foreignId('lapangan_id');
            $table->foreignId('jadwal_id');
            $table->string('nama_pelanggan');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('catatan')->nullable();
            $table->string('jenis_pembayaran');
            $table->string('harga_lapangan');
            $table->string('biaya_admin');
            $table->string('total');
            $table->string('order_id');
            $table->string('status');
            $table->string('jenis_transaksi');
            $table->string('waktu_order');
            $table->string('batas_pembayaran');
            $table->string('nomor_pembayaran');
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
        Schema::dropIfExists('transaksis');
    }
};
