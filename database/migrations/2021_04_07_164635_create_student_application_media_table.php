<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentApplicationMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_application_media', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_application_id');
            $table->mediumText('name');
            $table->timestamps();

            $table->foreign('student_application_id')->references('id')->on('student_applications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_application_media');
    }
}
