<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    protected $fillable = ['admission_number','course_id','first_name','middle_name','last_name','national_id','county_id','status'];

    public function contactDetail()
    {
        return $this->hasOne('App\Models\ContactDetail');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function county()
    {
        return $this->belongsTo('App\Models\County');
    }
}
