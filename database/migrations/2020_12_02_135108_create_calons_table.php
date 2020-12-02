<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id');
            $table->string('nim', 5);
            $table->string('nama', 100);
            $table->text('visi');
            $table->text('misi');
            $table->enum('jenis_calon', ['SMFT', 'BPMFT']);
            $table->string('photo_url');
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
        Schema::dropIfExists('calons');
    }
}
