<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherBookingClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_booking_classes', function (Blueprint $table) {
            $table->charset = 'utf8';	                                        //For the Usage of Unicode
            $table->increments('id')->unsigned();                               // Primary Key
            // $table->string('ClubId',100);
            // $table->foreign('ClubId')->references('ClubId')->on('clubs');      // Foreign Key
            $table->integer('TeacherId')->unsigned();
            $table->foreign('TeacherId')->references('id')->on('users');       // Foreign Key
            $table->integer('PackageId')->unsigned();
            $table->foreign('PackageId')->references('id')->on('packages');    // Foreign Key
            // $table->integer('ClassId')->unsigned();
            // $table->reference('ClassId')->reference('id')->on('class_lists');   // Foreign Key
            $table->enum('Type',['work','break','express']);
            $table->string('Title',100);
            $table->string('Description',1000);
            $table->date('Date');
            $table->time('Time');
            $table->integer('Hours')->unsigned();
            $table->integer('NumOfStudents')->unsigned();
            $table->enum('Status',['P','C','F']);   //P-Pending, C - Cancelled, F - Finished
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
        Schema::dropIfExists('teacher_booking_classes');
    }
}
