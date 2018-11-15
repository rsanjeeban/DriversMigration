<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_classes', function (Blueprint $table) {
            $table->charset = 'utf8';	                                     //For the Usage of Unicode 
            $table->increments('id');                                       // Primary key 
            $table->integer('StudentId')->unsigned();
            $table->foreign('StudentId')->references('id')->on('users');    // Foreign Key
            $table->integer('BookingClassId')->unsigned();
            $table->enum('Attendance',['P','A','C']);                       //P - Present, A - Absent, C - Cancelled
            $table->date('Date');
            $table->time('Time');
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
        Schema::dropIfExists('booking_classes');
    }
}
