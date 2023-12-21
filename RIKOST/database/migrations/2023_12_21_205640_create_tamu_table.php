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
        Schema::create('tamu', function (Blueprint $table) {
            $table->id('id_tamu');
            $table->string('nama_tamu');
            $table->string('no_hp_tamu');
            $table->string('kartu_identitas');
            $table->date('waktu_checkin');
            $table->date('waktu_checkout');
            $table->unsignedBigInteger('id_kamar');
            $table->unsignedBigInteger('id_penyewa');

            $table->foreign('id_kamar')->references('id_kamar')->on('kamar');
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamu');
    }
};
