<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pemimpins', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('bidang');
        $table->integer('nip'); // Atur nilai default yang valid (misalnya 0) sesuai dengan kebutuhan aplikasi Anda.
        $table->integer('nidn');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
    });

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemimpins');
    }
};
