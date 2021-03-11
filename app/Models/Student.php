<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id','phone_number','national_id','physical_address','next_of_kin','county','religion','gender','nationality'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
