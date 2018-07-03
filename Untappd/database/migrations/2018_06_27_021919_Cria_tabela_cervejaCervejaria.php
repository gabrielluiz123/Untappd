<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCervejaCervejaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('cervejaCervejarias', function (Blueprint $table) {
            
            $table->increments('id');

             $table->integer('id_cerveja')->unsigned();
            $table->foreign('id_cerveja')->references('id')->on('cervejas')->onUpdate('cascade');

             $table->integer('id_cervejaria')->unsigned();
            $table->foreign('id_cervejaria')->references('id')->on('cervejarias')->onUpdate('cascade');

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
        Schema::dropIfExists('cervejaCervejarias');
    }
}
