<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = ['name'];

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course','course_years','year_id','course_id');
    }

    public function semesters()
    {
        return $this->belongsToMany('App\Models\CourseSemester','course_year_semesters','year_id','course_semester_id');
    }

    public function courseSemesters($course)
    {
        return $this->semesters()->where('course_id',$course)->get();
    }
}
