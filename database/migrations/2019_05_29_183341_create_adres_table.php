<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clnt_id')->unsigned();
            $table->foreign('clnt_id')->references('id')->on('clnts');
            $table->string('destinataire', 100);
            $table->string('rue', 100);
            $table->integer('numero');
            $table->string('npa', 100);
            $table->string('localite', 100);
            $table->string('pays', 100);

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
        Schema::dropIfExists('adres');
    }
}
