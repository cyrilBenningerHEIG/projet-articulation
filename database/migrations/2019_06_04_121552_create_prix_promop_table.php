<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrixPromopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prix_promop', function (Blueprint $table) {
            $table->integer('prix_id')->unsigned();
            $table->foreign('prix_id')->references('id')->on('prixes');
            $table->integer('promop_id')->unsigned();
            $table->foreign('promop_id')->references('id')->on('promops');
            $table->float('prixPromo')->nullable();
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
        Schema::dropIfExists('prix_promop');
    }
}
