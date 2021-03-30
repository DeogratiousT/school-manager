<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $fillable = ['student_application_id','mobile_number','home_telephone','email','po_box'];

    public function studentApplication()
    {
        return $this->belongsTo('App\Models\StudentApplication','student_application_id');
    }
}
