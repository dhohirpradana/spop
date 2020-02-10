<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSubjekPajaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_subjek_pajaks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_jalan');
            $table->string('nama_subjek_pajak');
            $table->string('rt');
            $table->string('rw');
            $table->string('nomor_ktp');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('pekerjaan_id');
            $table->unsignedBigInteger('desa_id');
            $table->timestamps();

            $table->foreign('status_id')->references("id")->on("statuses");
            $table->foreign('pekerjaan_id')->references("id")->on("pekerjaans");
            $table->foreign('desa_id')->references("id")->on("desas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_subjek_pajaks');
    }
}
