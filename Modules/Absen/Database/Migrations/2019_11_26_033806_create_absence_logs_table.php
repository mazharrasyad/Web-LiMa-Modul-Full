<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenceLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('absence_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->time('jam_mulai');
            $table->time('jam_akhir');
            $table->enum('status_mulai',['hadir','telat','alpha','izin','sakit'])->nullable();
            $table->enum('status_akhir',['hadir','telat','alpha','izin','sakit'])->nullable();
            $table->text('keterangan')->nullable();
            $table->integer('nilai')->nullable();
            $table->unsignedInteger('sprint_id')->nullable();
            $table->foreign('sprint_id')
                ->on('sprints')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('absence_logs');
    }
}
