<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOgrenciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrenci', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ogrenci_no',11);
            $table->char('sinif',1);
            $table->char('cep_tel',11);
            $table->integer('kullanici_id')->unsigned();
            $table->integer('mufredat_id')->unsigned();
            $table->foreign('kullanici_id')->references('id')->on('users');
            $table->foreign('mufredat_id')->references('id')->on('mufredat');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ogrenci');
    }
}
