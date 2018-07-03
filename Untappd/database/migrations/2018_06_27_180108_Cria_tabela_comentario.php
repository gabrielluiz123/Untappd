<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
          Schema::create('comentarios', function (Blueprint $table) {
            
            $table->increments('id');

             $table->integer('id_user1')->unsigned();
            $table->foreign('id_user1')->references('id')->on('users')->onUpdate('cascade');
            $table->integer('id_user2')->unsigned();
            $table->foreign('id_user2')->references('id')->on('users')->onUpdate('cascade');
             $table->integer('id_checkin')->unsigned();
            $table->foreign('id_checkin')->references('id')->on('checkins')->onUpdate('cascade');

            $table->string('coment', 60);
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
        Schema::dropIfExists('comentarios');
    }
}
