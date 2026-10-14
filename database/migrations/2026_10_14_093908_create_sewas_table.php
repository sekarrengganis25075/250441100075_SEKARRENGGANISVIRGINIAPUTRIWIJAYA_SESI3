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
        Schema::create('sewas', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
             $table->foreignId('kendaraan_id')->constrained('kendaraans');
             $table->string('nama_penyewa');
             $table->date('tanggal_mulai');
             $table->int('lama_sewa');
             $table->int('total_biaya');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
