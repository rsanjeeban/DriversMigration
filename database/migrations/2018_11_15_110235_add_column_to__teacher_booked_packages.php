<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTeacherBookedPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teacher_booking_classes',function($table){
            // $table->integer('PackageId')->unsigned();
            // $table->foreign('PackageId')->references('id')->on('packages');     // Foreign Key
            $table->integer('ClubId')->unsigned();
            $table->foreign('ClubId')->references('id')->on('clubs');           // Foreign Key
            $table->integer('ClassId')->unsigned();
            $table->foreign('ClassId')->references('id')->on('class_lists');   // Foreign Key
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
