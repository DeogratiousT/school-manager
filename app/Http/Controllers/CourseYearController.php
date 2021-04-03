<?php

namespace App\Http\Controllers;

use App\Models\CourseYear;
use App\Models\CourseSemester;
use App\Models\Course;
use App\Models\Year;
use App\Models\Unit;
use Illuminate\Http\Request;

class CourseYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        $semesters = CourseSemester::all();
        $units = Unit::all();
        return view('course-years.index',['course'=>$course, 'semesters'=>$semesters, 'units'=>$units]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        $years = Year::all();
        return view('course-years.create',['course'=>$course, 'years'=>$years]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        CourseYear::updateOrCreate(
            ['course_id' => $course->id, 'year_id'=>$request->year_id]
        );

        return redirect()->route('courses.years.index',$course)->with('success','Year Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseYear  $courseYear
     * @return \Illuminate\Http\Response
     */
    public function show(CourseYear $courseYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseYear  $courseYear
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseYear $courseYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseYear  $courseYear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseYear $courseYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseYear  $courseYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseYear $courseYear)
    {
        //
    }
}
