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
            $table->date('tgl_mulai');
            $table->date('tgl_selesai');
            $table->date('deadline');
            $table->text('deskripsi');
            $table->string('status');
            $table->string('prioritas');
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas');
            $table->unsignedBigInteger('parent_task_id');
            $table->foreign('parent_task_id')->references('id_task')->on('tasks');
            $table->text('subtask');
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
