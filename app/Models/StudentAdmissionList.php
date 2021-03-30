<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class StudentAdmissionList extends Model
{
    protected $fillable = ['admission_number','academic_year_semester_id','course_id'];
}
