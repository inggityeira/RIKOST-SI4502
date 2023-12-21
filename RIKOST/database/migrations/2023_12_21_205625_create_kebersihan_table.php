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
        Schema::create('kebersihan', function (Blueprint $table) {
            $table->id('id_kebersihan');
            $table->unsignedBigInteger('id_penyewa');
            $table->unsignedBigInteger('id_pembayaran');
            $table->string('status_kebersihan');
            $table->string('lokasi_kebersihan');
            $table->string('catatan_kebersihan');
            $table->integer('durasi_kebersihan');
            $table->unsignedBigInteger('id_pegawai');

            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebersihan');
    }
};
