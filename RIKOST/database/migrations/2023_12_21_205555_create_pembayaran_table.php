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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_penyewa');
            $table->date('tgl_pembayaran');
            $table->string('termin_pembayaran');
            $table->decimal('nominal_pembayaran', 10, 2);
            $table->string('aspek_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('status_pembayaran');
            
            $table->foreign('id_penyewa')->references('id_penyewa')->on('penyewa');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
