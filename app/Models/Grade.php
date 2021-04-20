<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Grade extends Model
{
    use HasSlug;

    protected $fillable = ['name','slug','course_id','academic_year_id'];

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

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function academicYear()
    {
        return $this->belongsTo('App\Models\AcademicYear');
    }

    
}
