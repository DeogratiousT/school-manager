<?php

namespace App\Http\Controllers;

use App\Models\IntakeCourse;
use App\Models\Course;
use App\Models\Intake;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class IntakeCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Intake $intake)
    {
        return view('intake-courses.index',['intake'=>$intake]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Intake $intake)
    {
        $courses = Course::all();
        return view('intake-courses.create',['intake'=>$intake, 'courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Intake $intake)
    {
        IntakeCourse::updateOrCreate(
            ['course_id' => $request->course_id, 'intake_id'=>$intake->id]
        );

        return redirect()->route('intakes.courses.index',$intake)->with('success','Intake Course Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IntakeCourse  $intakeCourse
     * @return \Illuminate\Http\Response
     */
    public function show(IntakeCourse $intakeCourse, Intake $intake, Course $course)
    {
        $newApplications = $course->studentApplications->where('status','requested');
        $approvedApplications = $course->studentApplications->where('status','approved');
        $rejectedApplications = $course->studentApplications->where('status','rejected');
        return view('intake-courses.show',['intake'=>$intake, 'course'=>$course, 'newApplications'=>$newApplications, 'approvedApplications'=>$approvedApplications, 'rejectedApplications'=>$rejectedApplications]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IntakeCourse  $intakeCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(IntakeCourse $intakeCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IntakeCourse  $intakeCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IntakeCourse $intakeCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IntakeCourse  $intakeCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(IntakeCourse $intakeCourse)
    {
        //
    }
}
