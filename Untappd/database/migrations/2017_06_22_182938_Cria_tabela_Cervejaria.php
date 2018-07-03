<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCervejaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cervejarias', function (Blueprint $table) {
            
            $table->increments('id');
             
            $table->string('name');
            $table->integer('teor');
            $table->string('type', 20);
            $table->string('city', 20);
            $table->string('state', 20);
            $table->string('country', 20);
            

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
        Schema::dropIfExists('cervejarias');
    }
}
