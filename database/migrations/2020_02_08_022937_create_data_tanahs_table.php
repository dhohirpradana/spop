<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tanahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('luas_tanah');
            $table->unsignedbigInteger('jenis_tanah_id');
            $table->timestamps();

            $table->foreign('jenis_tanah_id')->references("id")->on("jenis_tanahs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tanahs');
    }
}
