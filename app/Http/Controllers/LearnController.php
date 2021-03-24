<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class LearnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['enroll']);
    }

    public function index()
    {   
        $courses = Course::all();

        return view('home.courses.index',['courses'=>$courses]);
    }

    public function show(Course $course)
    {
        return view('home.courses.show',['course'=>$course]);
    }

    public function enroll(Course $course)
    {
        return view('home.courses.enroll',['course'=>$course]);
    }
}
