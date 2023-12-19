<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan', function (Blueprint $table) {
            $table->id();
            $table->foreign('id')->references('id')->on('users') ;
            $table->string('pendidikan');
            $table->string('nama_institusi');
            $table->string('alamat_institusi');
            $table->string('jurusan');
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->string('nilai');
            $table->string('kontak_institusi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendidikan');
    }
};
