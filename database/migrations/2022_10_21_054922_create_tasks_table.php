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
            $table->string('nama', 50);
            $table->string('deskripsi');
            $table->string('type', 10);
            $table->string('prioritas', 10);
            $table->unsignedBigInteger('id_anggota');
            $table->foreign('id_anggota')->references('id_anggota')->on('anggotas')->onDelete('cascade');
            $table->date('deadline');
            $table->char('approved', 5)->nullable();
            $table->bigInteger('parent_id_task')->nullable();
            $table->string('status', 20)->nullable();
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
