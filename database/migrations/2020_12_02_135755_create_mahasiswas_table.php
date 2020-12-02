<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id');
            $table->string('nim', 5);
            $table->string('nama', 100);
            $table->enum('status', ['ready', 'terdaftar', 'terverifikasi', 'voted'])->default('ready');
            $table->date('verified_at');
            $table->timestamps();

            $table->foreign('prodi_id')->references('id')->on('prodis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
