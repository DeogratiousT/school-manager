<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentApplicationMedia extends Model
{
    protected $fillable = ['student_application_id','name'];

    public function studentApplication()
    {
        return $this->belongsTo('App\Models\StudentApplication');
    }
}
