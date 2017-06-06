<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStajyeriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stajyeri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->string('faks');
            $table->string('webadresi');
            $table->string('telno');
             $table->integer('il_id')->unsigned();
            $table->foreign('il_id')->references('id')->on('muh_iller');
              $table->integer('ilce_id')->unsigned();
            $table->foreign('ilce_id')->references('id')->on('muh_ilceler');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stajyeri');
    }
}
