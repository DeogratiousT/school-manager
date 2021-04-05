<?php

namespace App\Models;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasSlug;

    protected $fillable = ['name','slug','alias'];

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

    public function studentApplication()
    {
        return $this->hasMany('App\Models\StudentApplication');
    }

    public function years()
    {
        return $this->belongsToMany('App\Models\Year','course_years','course_id','year_id');
    }
}
