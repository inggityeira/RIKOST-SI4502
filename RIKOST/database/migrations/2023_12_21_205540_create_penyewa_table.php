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
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id('id_penyewa');
            $table->string('nama_penyewa');
            $table->string('kontak_penyewa');
            $table->string('NIK_penyewa');
            $table->string('nama_ortu');
            $table->string('kontak_ortu');
            $table->string('waktu_sewa');
            $table->unsignedBigInteger('id_kamar');
            $table->string('fasilitas_umum');
            
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewa');
    }
};
