<?php

namespace App\Http\Controllers;

use App\Models\CourseYearSemesterUnit;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseSemester;
use App\Models\Unit;

class CourseYearSemesterUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseYearSemesterUnit::updateOrCreate([
            'course_id' => Course::where('slug',$request->course)->pluck('id')->first(),
            'year_id' => $request->year,
            'semester_id' => $request->semester,
            'unit_id' => $request->unit_id,
        ]);

        return redirect()->route('courses.show',$request->course)->with('success','Semester Unit added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseYearSemesterUnit  $courseYearSemesterUnit
     * @return \Illuminate\Http\Response
     */
    public function show(CourseYearSemesterUnit $courseYearSemesterUnit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseYearSemesterUnit  $courseYearSemesterUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseYearSemesterUnit $courseYearSemesterUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseYearSemesterUnit  $courseYearSemesterUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseYearSemesterUnit $courseYearSemesterUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseYearSemesterUnit  $courseYearSemesterUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseYearSemesterUnit $courseYearSemesterUnit)
    {
        //
    }
}
