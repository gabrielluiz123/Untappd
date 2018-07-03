<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCerveja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cervejas', function (Blueprint $table) {
            
            $table->increments('id');
             
            $table->string('name');
            $table->integer('teor');
            $table->string('type', 20);

            $table->engine='InnoBD';

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cervejas');
    }
}
