<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->bigIncrements('id_anggota');
            $table->string('nama');
            $table->char('no_telpon', 12);
            $table->string('alamat');
            $table->string('username');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('posisi');
            $table->string('peran');
            $table->unsignedBigInteger('id_tim');
            $table->foreign('id_tim')->references('id_tim')->on('tims');
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
        Schema::dropIfExists('anggotas');
    }
}
