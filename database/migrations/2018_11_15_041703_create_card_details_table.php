<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->charset = 'utf8';	                                     //For the Usage of Unicode 
            $table->increments('id');                                   // Primary key
            $table->integer('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');   // Foreign key
            $table->string('CardType',45);                              // Encrypted Form
            $table->string('CardNumber',200);                           // Encrypted Form
            $table->string('CardHolderName',200);                       // Encrypted Form
            $table->string('Expires',200);                              // Encrypted Form
            $table->string('CVV',200);                                  // Encrypted Form
            $table->enum('Status',['active','expired']);
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
        Schema::dropIfExists('card_details');
    }
}
