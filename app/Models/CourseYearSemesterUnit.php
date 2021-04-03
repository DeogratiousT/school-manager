<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseYearSemesterUnit extends Model
{
    protected $fillable = ['course_id','year_id','semester_id','unit_id'];
}
