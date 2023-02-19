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
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pengguna_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('pengguna_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignUuid('olahraga_id');
            $table->foreignUuid('lapangan_id');
            $table->foreignUuid('jadwal_id');
            $table->string('nama_pelanggan');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('catatan')->nullable();
            $table->string('jenis_pembayaran');
            $table->integer('harga_lapangan');
            $table->integer('biaya_admin');
            $table->integer('total');
            $table->string('order_id');
            $table->boolean('status');
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
