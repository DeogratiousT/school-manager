<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Unit extends Model
{
    use HasSlug;

    protected $fillable = ['name','slug','hours'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function courseYearSemesters()
    {
        return $this->belongsToMany('App\Models\CourseYearSemester','course_year_semester_units','unit_id','course_year_semester_id');
    }    
}
