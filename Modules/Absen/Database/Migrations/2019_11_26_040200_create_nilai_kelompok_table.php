<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kelompok', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('nilai_kelompok');
         $table->integer('kelompok')->nullable();
            $table->unsignedInteger('sprint_id')->nullable();
            $table->foreign('sprint_id')
                ->on('sprints')
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
        Schema::dropIfExists('nilai_kelompok');
    }
}
