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
        Schema::create('usulan_detail_has_rincians', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('usulan_komponen_program_id');
            // $table->unsignedBigInteger('akun_detail_id');
            $table->unsignedBigInteger('kegiatan_id')->nullable();
            $table->string('detail');
            $table->string('volume');
            $table->string('satuan');
            $table->string('harga_satuan');
            // $table->string('spesifikasi');
            $table->timestamps();

            // $table->foreign('usulan_komponen_program_id')->references('id')->on('usulan_komponen_programs')->cascadeOnDelete();
            // $table->foreign('akun_detail_id')->references('id')->on('akun_details')->cascadeOnDelete();
            $table->foreign('kegiatan_id')->references('id')->on('kegiatans')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_detail_has_rincians');
    }
};
