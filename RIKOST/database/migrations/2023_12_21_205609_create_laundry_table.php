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
        Schema::create('laundry', function (Blueprint $table) {
            $table->id('id_laundry');
            $table->string('jenis_laundry');
            $table->unsignedBigInteger('id_penyewa');
            $table->integer('berat_laundry');
            $table->decimal('tagihan_laundry', 10, 2);
            $table->date('tgl_pemesanan');
            $table->date('tgl_selesai');
            $table->string('status_laundry');
            $table->unsignedBigInteger('id_pegawai');

            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundry');
    }
};
