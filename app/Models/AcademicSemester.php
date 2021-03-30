<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicSemester extends Model
{
    protected $fillable = ['name'];

    public function academicYears()
    {
        return $this->belongsToMany('App\Models\AcademicYear','academic_year_semesters','academic_semester_id','academic_year_id');
    }
}
