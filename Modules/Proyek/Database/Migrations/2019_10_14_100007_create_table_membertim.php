<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembertim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membertim', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tim_id')->unsigned();
            $table->integer('mahasiswa_id')->unsigned();
            $table->integer('peran_id')->unsigned();
            $table->text('tanggung_jawab');
            $table->double('final_skor')->default(0);
            $table->string('created_by')->default('Scrum Master');
            $table->timestamps();
            $table->foreign('tim_id')->references('id')->on('tim');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa');
            $table->foreign('peran_id')->references('id')->on('peran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membertim');
    }
}
