<?php

namespace App\Http\Controllers;

use App\Models\AcademicSemester;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\AcademicSemestersLaratables;

class AcademicSemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(AcademicSemester::class, AcademicSemestersLaratables::class);
        }

        return view('academic-semesters.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academic-semesters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AcademicSemester::create($request->validate([
            'name' => 'required',
        ]));

        return redirect()->route('academic-semesters.index')->with('success','Academic Semester Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicSemester  $academicSemester
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicSemester $academicSemester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicSemester  $academicSemester
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicSemester $academicSemester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicSemester  $academicSemester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicSemester $academicSemester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicSemester  $academicSemester
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicSemester $academicSemester)
    {
        //
    }
}
