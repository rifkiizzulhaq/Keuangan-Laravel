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
        Schema::create('usulan_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unit_id');
            // $table->unsignedBigInteger('admin_id');
            $table->string('kode')->nullable();
            $table->integer('program')->nullable();
            $table->date('tahun_anggaran');
            $table->string('rincian');
            $table->integer('volume');
            $table->string('satuan');
            $table->integer('harga_satuan');
            // $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            // $table->foreign('admin_id')->references('id')->on('admins');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_kegiatans');
    }
};
