<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produ_id')->unsigned();
            $table->foreign('produ_id')->references('id')->on('produs');
            $table->integer('appel_id')->unsigned();
            $table->foreign('appel_id')->references('id')->on('appels');
            $table->integer('frmt_id')->unsigned();
            $table->foreign('frmt_id')->references('id')->on('frmts');
            $table->integer('regn_id')->unsigned();
            $table->foreign('regn_id')->references('id')->on('regns');
            $table->integer('prix_id')->unsigned();
            $table->foreign('prix_id')->references('id')->on('prixes');
            $table->integer('condi_id')->unsigned();
            $table->foreign('condi_id')->references('id')->on('condis');
            $table->string('nom');
            $table->text('description');
            $table->string('alcool');
            $table->string('apogee');
            $table->integer('millesime');
            $table->string('photoUrl')->nullable($value = true);
            $table->boolean('estBio')->default(0);
            $table->boolean('estVds')->default(0);
            $table->boolean('estPrimeur')->default(0);
            $table->string('cotation')->nullable($value = true);
            $table->string('classement')->nullable($value = true);
            $table->integer('stock');
            
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
        Schema::dropIfExists('vins');
    }
}
