<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('distributions', function (Blueprint $table) {
            $table->id();
            $table->date('waktu_pengiriman');
            $table->string('alamat_pengiriman');
            $table->integer('jumlah_pengiriman');
            $table->integer('jumlah_kendaraan_pengirim');
            $table->string('plat_nopol');
            $table->string('nama_driver');
            $table->string('status_pengiriman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributions');
    }
};
