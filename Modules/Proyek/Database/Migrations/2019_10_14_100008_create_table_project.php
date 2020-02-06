<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('deskripsi');            
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('jumlah_sprint');            
            $table->double('budget')->default(0);            
            $table->string('status')->default('Baru');            
            $table->double('persen')->default(0);                        
            $table->integer('semester_id')->unsigned();            
            $table->integer('scrummaster_id')->unsigned();
            $table->integer('tim_id')->unsigned()->nullable();
            $table->string('created_by')->default('Project Owner');                        
            $table->timestamps();
            $table->foreign('semester_id')->references('id')->on('semester');
            $table->foreign('scrummaster_id')->references('id')->on('scrummaster');
            $table->foreign('tim_id')->references('id')->on('tim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
