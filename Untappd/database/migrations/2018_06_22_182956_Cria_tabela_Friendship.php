<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFriendship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            
            $table->increments('id');

             $table->integer('id_user1')->unsigned();
            $table->foreign('id_user1')->references('id')->on('users')->onUpdate('cascade');

             $table->integer('id_user2')->unsigned();
            $table->foreign('id_user2')->references('id')->on('users')->onUpdate('cascade');

            $table->integer('solicitation');

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
        Schema::dropIfExists('friendships');
    }
}
