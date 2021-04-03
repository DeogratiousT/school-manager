<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropCourseYearSemesterIdFromCourseYearSemesterUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_year_semester_units', function (Blueprint $table) {
            $table->dropColumn('course_year_semester_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_year_semester_units', function (Blueprint $table) {
            //
        });
    }
}
