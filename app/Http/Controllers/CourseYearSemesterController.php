<?php

namespace App\Http\Controllers;

use App\Models\CourseYearSemester;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseYearSemesterController extends Controller
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
        
        CourseYearSemester::updateOrCreate([
            'course_id' => Course::where('slug',$request->course)->pluck('id')->first(),
            'year_id' => $request->year,
            'course_semester_id' => $request->course_semester_id,
        ]);

        return redirect()->route('courses.years.index',$request->course)->with('success','Semester added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseYearSemester  $courseYearSemester
     * @return \Illuminate\Http\Response
     */
    public function show(CourseYearSemester $courseYearSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseYearSemester  $courseYearSemester
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseYearSemester $courseYearSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseYearSemester  $courseYearSemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseYearSemester $courseYearSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseYearSemester  $courseYearSemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseYearSemester $courseYearSemester)
    {
        //
    }
}
