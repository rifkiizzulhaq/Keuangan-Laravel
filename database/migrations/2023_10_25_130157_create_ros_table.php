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
        Schema::create('ros', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('admin_id');
            // $table->unsignedBigInteger('usulan_kegiatans_id');
            $table->integer('kode');
            $table->string('ro');
            $table->timestamps();

            // $table->foreign('usulan_kegiatans_id')->references('id')->on('usulan_kegiatans');
            // $table->foreign('admin_id')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ros');
    }
};
