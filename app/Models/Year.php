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
}
