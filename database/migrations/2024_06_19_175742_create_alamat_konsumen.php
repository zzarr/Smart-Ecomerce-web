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
        Schema::create('alamat_konsumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konsumen_id')->constrained('konsumen');
            $table->integer('id_provinsi');
            $table->string('nama_prov');
            $table->integer('id_kota');
            $table->string('nama_kota');
            $table->string('kode_pos')->nullable();
            $table->text('alamat_lengkap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat_konsumen');
    }
};
