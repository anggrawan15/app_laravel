<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblKamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tbl_kamar', function (Blueprint $table) {
            $table->increments('id');

            $table->string('no_kamar', 10);
            $table->string('nama', 100);
            $table->string('fasilitas', 255);
            $table->integer('harga');

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
        //
        Schema::drop('tbl_kamar');
    }
}
