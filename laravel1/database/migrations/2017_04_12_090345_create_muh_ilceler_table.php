<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuhIlcelerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muh_ilceler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('baslik');
            $table->integer('il_id')->unsigned();
            $table->foreign('il_id')->references('id')->on('muh_iller');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('muh_ilceler');
    }
}
