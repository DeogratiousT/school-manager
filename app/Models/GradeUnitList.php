<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeUnitList extends Model
{
    protected $fillable = ['unit_id','grade_id','academic_year_semester_id'];
}
