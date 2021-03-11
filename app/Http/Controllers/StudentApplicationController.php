<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentApplication;

class StudentApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        StudentApplication::create($request->validate([
            'user_id' => 'required|exists:users,id',
            'phone_number' => 'required|string',
            'national_id' => 'required|integer',
            'physical_address' => 'required|string',
            'next_of_kin' => 'required|string',
            'county' => 'required|string',
            'religion' => 'required|string',
            'gender' => 'required|string',
            'nationality' => 'required|string',
        ]));
    }
}
