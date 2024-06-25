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
        Schema::create('garapan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('petani_id')->constrained('petani');
            $table->foreignId('kategori_id')->constrained('kategori');
            $table->string('nama_tanaman');
            $table->text('deskripsi')->nullable();
            $table->decimal('harga_per_unit', 10, 2);
            $table->date('tanggal_tanam')->nullable();
            $table->date('tanggal_panen')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_type')->nullable();
            $table->enum('status', ['tersedia', 'terjual', 'pre-order'])->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garapan');
    }
};
