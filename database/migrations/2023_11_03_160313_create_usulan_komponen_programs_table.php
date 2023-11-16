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
        Schema::create('usulan_komponen_programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usulan_id');
            $table->unsignedBigInteger('komponen_program_id')->nullable();
            $table->unsignedBigInteger('satuan_id')->nullable();
            $table->unsignedBigInteger('akun_detail_id')->nullable();
            $table->string('volume')->nullable();
            $table->string('harga_satuan')->nullable();
            $table->timestamps();

            $table->foreign('usulan_id')->references('id')->on('usulans')->onDelete('cascade');
            $table->foreign('satuan_id')->references('id')->on('satuans')->onDelete('cascade');
            $table->foreign('akun_detail_id')->references('id')->on('akun_details')->onDelete('cascade');
            $table->foreign('komponen_program_id')->references('id')->on('komponen_programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_komponen_programs');
    }
};
