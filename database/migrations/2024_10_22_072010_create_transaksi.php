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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('id_outlet');
            $table->string('kode_invoice');
            $table->string('id_member');
            $table->string('tanggal');
            $table->string('batas_waktu');
            $table->string('tgl_bayar');
            $table->string('biaya_tambahan');
            $table->string('diskon');
            $table->string('pajak');
            $table->string('status');
            $table->string('dibayar');
            $table->string('id_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
