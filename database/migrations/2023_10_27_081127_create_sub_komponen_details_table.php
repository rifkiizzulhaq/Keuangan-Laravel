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
        Schema::create('sub_komponen_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kegiatan_siperada_id');
            $table->integer('kode');
            $table->string('sub_komponen_detail');
            $table->timestamps();

            $table->foreign('kegiatan_siperada_id')->references('id')->on('kegiatan_siperadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_komponen_details');
    }
};
