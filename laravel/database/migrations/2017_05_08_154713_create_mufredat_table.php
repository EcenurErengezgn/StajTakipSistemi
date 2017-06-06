<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMufredatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mufredat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->integer('gun');
            $table->integer('bolum_id')->unsigned();
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
        Schema::dropIfExists('mufredat');
    }
}
