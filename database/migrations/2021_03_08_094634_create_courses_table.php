<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('alias')->unique();
            $table->string('code')->unique();
            $table->mediumText('requirements');
            $table->mediumText('uploads');
            $table->mediumText('description');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('department_id');
            $table->mediumText('learning_outcomes')->nullable();
            $table->mediumText('career_opportunities')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
