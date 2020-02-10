<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nop');
            $table->string('nop_asal');
            $table->unsignedBigInteger('data_letak_objek_id');
            $table->unsignedBigInteger('data_subjek_pajak_id');
            $table->unsignedBigInteger('data_tanah_id');
            
            $table->timestamps();

            $table->foreign('data_letak_objek_id')
                ->references("id")->on("data_letak_objeks");
            $table->foreign('data_subjek_pajak_id')
                ->references("id")->on("data_subjek_pajaks");
            $table->foreign('data_tanah_id')
                ->references("id")->on("data_tanahs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spops');
    }
}
