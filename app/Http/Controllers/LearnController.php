<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class LearnController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('home.courses.index',['courses'=>$courses]);
    }
}
