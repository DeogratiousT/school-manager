<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class AcademicYearSemester extends Model
{
    protected $fillable = ['academic_year_id','academic_semester_id'];
}
