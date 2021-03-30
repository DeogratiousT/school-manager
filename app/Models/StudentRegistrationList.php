<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class StudentRegistrationList extends Model
{
    protected $fillable = ['grade_id','academic_year_semester_id','student_application_id'];
}
