<?php

namespace App\Http\Controllers;

use App\Models\StudentApplication;
use App\Models\Course;
use App\Models\County;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\StudentApplicationsLaratables;

class StudentApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(StudentApplication::class, StudentApplicationsLaratables::class);
        }

        return view('student-applications.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $counties = County::all();
        return view('student-applications.create',['courses'=>$courses, 'counties'=>$counties]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $studentApplication = StudentApplication::create($request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'national_id' => 'required|integer',
            'course_id' => 'required|exists:courses,id',
            'county_id' => 'required|exists:counties,id',
            'status' => 'required'
        ]));

        return redirect()->route('students.media.create',$studentApplication)->with('success','Student Details Saved, Upload Required Documents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentApplication  $studentApplication
     * @return \Illuminate\Http\Response
     */
    public function show(StudentApplication $studentApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentApplication  $studentApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentApplication $studentApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentApplication  $studentApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentApplication $studentApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentApplication  $studentApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $studentApplication = StudentApplication::find($id);

        $studentApplication->status = $request->status;

        $studentApplication->save();

        return redirect()->route('students.index')->with('success','Application '.$request->status.' Successfully');
    }
}
