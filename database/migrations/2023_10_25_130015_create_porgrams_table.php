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
        Schema::create('porgrams', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('admin_id');
            // $table->unsignedBigInteger('usulan_kegiatans_id');
            $table->unsignedBigInteger('kegiatan_siperada_id');
            $table->integer('kode');
            $table->string('program');
            $table->timestamps();

            // $table->foreign('usulan_kegiatans_id')->references('id')->on('usulan_kegiatans');
            // $table->foreign('admin_id')->references('id')->on('admins');

            $table->foreign('kegiatan_siperada_id')->references('id')->on('kegiatan_siperadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porgrams');
    }
};
