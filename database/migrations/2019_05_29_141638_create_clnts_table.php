<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clnts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique('email');
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->date('dateNaissance');
            $table->string('telephone', 100)->nullable($value = true);
            $table->boolean('sexe');
            $table->string('password', 100);

            $table->boolean('estAdmin')->default(0);


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
        Schema::dropIfExists('clnts');
    }
}