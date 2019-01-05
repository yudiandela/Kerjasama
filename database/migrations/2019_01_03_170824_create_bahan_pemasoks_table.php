<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahanPemasoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_pemasoks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userAccount_id')->unsigned();
            $table->string('nama_bahan', 50);
            $table->integer('kategori_bahan_id')->unsigned();
            $table->string('luas_lahan_pengolahan', 50);
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
        Schema::dropIfExists('bahan_pemasoks');
    }
}
