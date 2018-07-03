<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCheckIn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkIns', function (Blueprint $table) {
            
            $table->increments('id');

             $table->integer('id_cerveja')->unsigned();
            $table->foreign('id_cerveja')->references('id')->on('cervejas')->onUpdate('cascade');

             $table->integer('id_cervejaria')->unsigned();
            $table->foreign('id_cervejaria')->references('id')->on('cervejarias')->onUpdate('cascade');

             $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');

            $table->timestamps();
            
            $table->integer('star');

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
        Schema::dropIfExists('checkIns');
    }
}
