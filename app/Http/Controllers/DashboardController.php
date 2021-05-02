<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Level;
use App\Models\Department;
use App\Models\StudentApplication;
use App\Models\Intake;
use App\Models\County;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $courses = Course::all()->count();
        $levels = Level::all()->count();
        $departments  = Department::all()->count();
        $applications = StudentApplication::all()->count();
        $intakes = Intake::all()->count();
        $counties = County::all()->count();
        
        return view('index',[
            'courses' => $courses,
            'levels' => $levels,
            'departments' => $departments,
            'applications' => $applications,
            'intakes' => $intakes,
            'counties' => $courses,
        ]);
    }
}
