<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id_task');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('type');
            $table->string('prioritas');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas');
            $table->bigInteger('parent_id_task')->nullable();
            $table->string('status', 15)->nullable();
            $table->string('submit_task')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
