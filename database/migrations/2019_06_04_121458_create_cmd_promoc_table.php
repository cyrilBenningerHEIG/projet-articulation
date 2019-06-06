<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmdPromocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmd_promoc', function (Blueprint $table) {
            $table->integer('promoc_id')->unsigned();
            $table->foreign('promoc_id')->references('id')->on('promocs');
            $table->integer('cmd_id')->unsigned();
            $table->foreign('cmd_id')->references('id')->on('cmds');

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
        Schema::dropIfExists('cmd_promoc');
    }
}
