<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMulakatpuanlamasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mulakatpuanlamasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mulakatsorulari_id')->unsigned();
            $table->char('cevap');
            $table->double('puan');
            $table->foreign('mulakatsorulari_id')->references('id')->on('mulakatsorulari');
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
        Schema::dropIfExists('mulakatpuanlamasi');
    }
}
