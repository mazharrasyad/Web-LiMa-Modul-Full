<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tim', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('semester_id')->unsigned();
            $table->integer('prodi_id')->unsigned();
            $table->double('final_skor')->default(0);
            $table->string('created_by')->default('Scrum Master');
            $table->timestamps();
            $table->foreign('semester_id')->references('id')->on('semester');
            $table->foreign('prodi_id')->references('id')->on('prodi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tim');
    }
}
