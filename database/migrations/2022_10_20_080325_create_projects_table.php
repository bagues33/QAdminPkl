<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id_project');
            $table->string('nama', 100);
            $table->text('deskripsi')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->date('tgl_selesai')->nullable();
            $table->date('deadline');
            $table->string('budget', 50);
            $table->string('status', 25)->nullable();
            $table->unsignedBigInteger('id_klien');
            $table->foreign('id_klien')->references('id_klien')->on('kliens')->onDelete('cascade');
            $table->unsignedBigInteger('pm');
            $table->foreign('pm')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::table('projects', function($table) {
        //     $table->foreign('id_klien')->references('id_klien')->on('kliens')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
