<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clnt_id')->unsigned();
            $table->foreign('clnt_id')->references('id')->on('clnts');
            $table->integer('adresLivr_id')->unsigned();
            $table->foreign('adresLivr_id')->references('id')->on('adres');
            $table->integer('adresFact_id')->unsigned();
            $table->foreign('adresFact_id')->references('id')->on('adres');
            $table->double('total', 8, 2);
            $table->string('modePmt');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cmds');
    }
}
