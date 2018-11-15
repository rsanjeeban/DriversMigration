<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->charset = 'utf8';	                        //For the Usage of Unicode
            $table->increments('id');                           // Primary key
            $table->string('Name',100);
            $table->string('Description',1000);
            $table->integer('NumOfClasses')->unsigned();
            $table->integer('Hours')->unsigned();
            $table->double('Cost')->unsigned();
            $table->string('Image');
            $table->enum('Status',['enabled','disabled']);
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
        Schema::dropIfExists('packages');
    }
}
