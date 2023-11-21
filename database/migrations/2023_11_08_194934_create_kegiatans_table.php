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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usulan_komponen_program_id');
            $table->string('volume');
            $table->string('satuan');

            $table->timestamps();

            $table->foreign('usulan_komponen_program_id')->references('id')->on('usulan_komponen_programs')->onDelete('cascade');

            // $table->foreign('satuan_id')->references('id')->on('satuans')->onDelete('cascade');
            // $table->foreign('akun_detail_id')->references('id')->on('akun_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
