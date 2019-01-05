<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_user', 50);
            $table->string('nama_perusahaan', 50);
            $table->text('alamat_perusahaan');
            $table->string('bidang_perusahaan', 100);
            $table->text('deskripsi_perusahaan');
            $table->string('email', 50)->unique();
            $table->string('photo', 150);
            $table->string('no_telp', 20);
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
        Schema::dropIfExists('user_details');
    }
}
