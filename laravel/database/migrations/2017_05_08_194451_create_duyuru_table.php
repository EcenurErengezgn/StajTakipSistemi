<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDuyuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duyuru', function (Blueprint $table) {
            $table->increments('id');
            $table->text('baslik');
            $table->text('icerik');
            $table->integer('kullanici_id')->unsigned();
            $table->foreign('kullanici_id')->references('id')->on('users');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duyuru');
    }
}
