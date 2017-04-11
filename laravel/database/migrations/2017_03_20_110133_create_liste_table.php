<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liste', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->integer('listealt_id')->unsigned();
            $table->foreign('listealt_id')->references('id')->on('listealt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liste');
    }
}
