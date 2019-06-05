<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVinWlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vin_wlist', function (Blueprint $table) {
            $table->integer('vin_id')->unsigned();
            $table->foreign('vin_id')->references('id')->on('vins');
            $table->integer('wlist_id')->unsigned();
            $table->foreign('wlist_id')->references('id')->on('wlists');
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
        Schema::dropIfExists('vin_wlist');
    }
}
