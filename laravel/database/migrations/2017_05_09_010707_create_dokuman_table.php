<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokuman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('yolu');
            $table->integer('ogrenci_id')->unsigned();
            $table->foreign('ogrenci_id')->references('id')->on('ogrenci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokuman');
    }
}
