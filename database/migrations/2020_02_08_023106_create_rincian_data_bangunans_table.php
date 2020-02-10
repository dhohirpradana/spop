<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianDataBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_data_bangunans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('luas_bangunan');
            $table->integer('tahun_dibangun');
            $table->integer('tahun_renovasi');
            $table->integer('jumlah_lantai');
            $table->integer('daya_listrik');
            $table->unsignedBigInteger('jenis_penggunaan_bangunan_id');
            $table->unsignedBigInteger('kondisi_id');
            $table->unsignedBigInteger('konstruksi_id');
            $table->unsignedBigInteger('atap_id');
            $table->unsignedBigInteger('dinding_id');
            $table->unsignedBigInteger('lantai_id');
            $table->unsignedBigInteger('langit_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('jenis_penggunaan_bangunan_id')
                    ->references("id")->on("jenis_penggunaan_bangunans");
            $table->foreign('kondisi_id')
                    ->references("id")->on("kondisis");
            $table->foreign('konstruksi_id')
                    ->references("id")->on("konstruksis");
            $table->foreign('atap_id')
                    ->references("id")->on("ataps");
            $table->foreign('dinding_id')
                    ->references("id")->on("dindings");
            $table->foreign('lantai_id')
                    ->references("id")->on("lantais");
            $table->foreign('langit_id')
                    ->references("id")->on("langits");
            $table->foreign('user_id')
                    ->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rincian_data_bangunans');
    }
}
