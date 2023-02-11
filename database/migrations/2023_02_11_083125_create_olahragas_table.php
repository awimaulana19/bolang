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
        Schema::create('olahragas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('operasional_id');
            $table->string('jenis');
            $table->string('foto');
            $table->string('deskripsi');
            $table->string('aturan');
            $table->string('fasilitas');
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
        Schema::dropIfExists('olahragas');
    }
};
