<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKullaniciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kullanici', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->string('soyadi');
            $table->char('tc_no',11);
            $table->string('email')->unique();
            $table->string('sifre');
            $table->integer('bolum_id')->unsigned();
            $table->integer('unvan_id')->unsigned();
            $table->foreign('unvan_id')->references('id')->on('unvan');
            $table->foreign('bolum_id')->references('id')->on('bolum');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kullanici');
    }
}
