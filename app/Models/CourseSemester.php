<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSemester extends Model
{
    protected $fillable = ['name'];

    public function units()
    {
        return $this->belongsToMany('App\Models\Unit','course_year_semester_units','semester_id','unit_id');
    }

    public function semesterUnits($course, $year)
    {
        return $this->units()->where([['course_id',$course],['year_id',$year]])->get();
    }
}
