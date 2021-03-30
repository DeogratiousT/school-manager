<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeUnitListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_unit_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academic_year_semester_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('unit_id');
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
        Schema::dropIfExists('grade_unit_lists');
    }
}
