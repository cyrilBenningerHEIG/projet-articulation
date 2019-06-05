<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pays_id')->unsigned();
            $table->foreign('pays_id')->references('id')->on('pays');
            $table->string('nom');
            $table->double('lat');
            $table->double('long');
            
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
        Schema::dropIfExists('regns');
    }
}
