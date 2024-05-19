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
        Schema::create('pengeluaran_barangs', function (Blueprint $table) {
            $table->integer('id_pengeluaran')->primary();
            $table->date('tgl_keluar');
            $table->string('tujuan', 150);
            $table->integer('kuantity');
            $table->foreignId('kode_barang')->integer();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengeluaran_barangs');
    }
};
