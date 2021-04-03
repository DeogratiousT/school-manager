<?php

namespace App\Http\Controllers;

use App\Models\CourseSemester;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\CourseSemestersLaratables;

class CourseSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(CourseSemester::class , CourseSemestersLaratables::class);
        }
        return view('course-semesters.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course-semesters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseSemester::create($request->validate([
            'name' => 'required|unique:course_semesters,name',
        ]));

        return redirect()->route('course-semesters.index')->with('success','Course Semester Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseSemester  $courseSemester
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSemester $courseSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseSemester  $courseSemester
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSemester $courseSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseSemester  $courseSemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseSemester $courseSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseSemester  $courseSemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSemester $courseSemester)
    {
        //
    }
}
