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
        Schema::create('konfigurasis', function (Blueprint $table) {
            $table->id();
            $table->string('konfigurasi')->unique();
            $table->string('bri')->nullable();
            $table->string('bni')->nullable();
            $table->string('bca')->nullable();
            $table->string('mandiri')->nullable();
            $table->string('gopay')->nullable();
            $table->string('dana')->nullable();
            $table->string('ovo')->nullable();
            $table->string('linkaja')->nullable();
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
        Schema::dropIfExists('konfigurasis');
    }
};
