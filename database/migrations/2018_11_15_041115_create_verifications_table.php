<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->charset = 'utf8';	                                     //For the Usage of Unicode 
            $table->increments('id');                                   // Primary key
            $table->integer('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');   // Foreign key
            $table->integer('Code')->unsigned();
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
        Schema::dropIfExists('verifications');
    }
}
