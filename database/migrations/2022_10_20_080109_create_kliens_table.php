<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKliensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kliens', function (Blueprint $table) {
            $table->bigIncrements('id_klien');
            $table->string('nama', 100);
            $table->char('no_telpon', 15);
            $table->string('alamat');
            $table->string('email', 50);
            $table->string('photo')->nullable();
            $table->string('website', 30)->nullable();
            $table->string('deskripsi')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('kliens');
    }
}
