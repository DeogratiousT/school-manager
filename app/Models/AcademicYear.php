<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $fillable = ['name'];

    public function academicSemesters()
    {
        return $this->belongsToMany('App\Models\AcademicSemester','academic_year_semesters','academic_year_id','academic_semester_id');
    }
}
