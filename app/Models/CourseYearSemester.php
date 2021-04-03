<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseYearSemester extends Model
{
    protected $fillable = ['course_id','year_id','course_semester_id'];

    public function units()
    {
        return $this->belongsToMany('App\Models\Unit','course_year_semester_units','course_year_semester_id','unit_id');
    }

}
