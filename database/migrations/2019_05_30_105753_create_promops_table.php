<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->integer('pourcentage');
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');

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
        Schema::dropIfExists('promops');
    }
}
