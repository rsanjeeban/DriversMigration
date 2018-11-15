<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentBookedPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_booked_packages', function (Blueprint $table) {
            $table->charset = 'utf8';	                                     //For the Usage of Unicode
            $table->increments('id');                                           // Primary Key
            $table->integer('StudentId')->unsigned();
            $table->foreign('StudentId')->references('id')->on('users');        // Foreign Key
            $table->integer('TeacherId')->unsigned();
            $table->foreign('TeacherId')->references('id')->on('users');        // Foreign Key
            // $table->integer('PackageId')->unsigned();
            // $table->foreign('PackageId')->references('id')->on('packages');     // Foreign Key
            $table->enum('Status',['active','waiting','disabled']);
            $table->enum('Payment',['paid','unpaid']);
            $table->enum('Confirmation',['yes','no']);
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
        Schema::dropIfExists('student_booked_packages');
    }
}
