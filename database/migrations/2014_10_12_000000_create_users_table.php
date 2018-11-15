<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8';	                                     //For the Usage of Unicode 
            $table->increments('id')->unsigned();                            //Primary key
            $table->string('Name',100);
            $table->string('Email')->unique();
            $table->integer('Phone')->unsigned();
            $table->date('DOB');
            $table->string('Address',100);
            $table->string('City',100);
            $table->string('State',100);
            $table->integer('ZipCode')->unsigned();
            // 'ClubId' Column will be added with another migration after the Club table creation.
            $table->enum('Gender',['male','female']);
            $table->string('Password',80);                                      //Password is HashCode(Encrypted)
            $table->enum('Role',['super','admin','teacher','student']);
            $table->enum('Status',['active','blocked','banned']);
            $table->string('Image',100);
            $table->timestamp('CreatedDate');
            $table->rememberToken();        //Default Field of Laravel
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
