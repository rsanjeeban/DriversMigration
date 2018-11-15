<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersAdditionalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_additional_details', function (Blueprint $table) {
            $table->charset = 'utf8';	                            // For Usage of Unicode 
            $table->increments('id');                               // Primary key
            $table->foreign('id')->references('id')->on('Users');   // Foreign key
            $table->string('Country',100);
            $table->string('Qualification',1000);
            $table->string('AboutMe',1000);
            $table->integer('Rating')->unsigned();
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
        Schema::dropIfExists('teachers_additional_details');
    }
}
