<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMulakatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mulakat', function (Blueprint $table) {
            $table->increments('id');
            $table->date('baslangictarihi');
            $table->date('bitistarihi');
            $table->integer('toplamgun');
            $table->integer('kabulgun');
            $table->text('aciklama');
            $table->integer('ogrenci_id')->unsigned();
            $table->foreign('ogrenci_id')->references('id')->on('ogrenci');
            $table->integer('stajdonemi_id')->unsigned();
            $table->foreign('stajdonemi_id')->references('id')->on('stajdonemi');
            $table->integer('stajdurumu_id')->unsigned();
            $table->foreign('stajdurumu_id')->references('id')->on('stajdurumu');
            $table->integer('stajturu_id')->unsigned();
            $table->foreign('stajturu_id')->references('id')->on('stajturu');



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
        Schema::dropIfExists('mulakat');
    }
}
