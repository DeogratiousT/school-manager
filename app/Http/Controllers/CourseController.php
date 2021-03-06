<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseSemester;
use App\Models\Unit;
use App\Models\Level;
use App\Models\Department;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\CoursesLaratables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(Course::class, CoursesLaratables::class);
        }

        return view('courses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = Level::all();
        $departments = Department::all();
        return view('courses.create',['levels'=>$levels, 'departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Course::create($request->validate([
            'name' => 'required|string|unique:courses,name',
            'alias' => 'required|string',
            'code' => 'required|unique:courses,code',
            'level_id' => 'required|exists:levels,id',
            'department_id' => 'required|exists:departments,id',
            'description' => 'required',
            'requirements' => 'required',
            'uploads' => 'required',
            'learning_outcomes' => 'nullable',
            'career_opportunities' => 'nullable',
        ]));

        return redirect()->route('courses.index')->with('success','Course Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $semesters = CourseSemester::all();
        $units = Unit::all();
        return view('courses.show',['course'=>$course, 'semesters'=>$semesters, 'units'=>$units]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $levels = Level::all();
        $departments = Department::all();
        return view('courses.edit',['course'=>$course, 'levels'=>$levels, 'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->validate([
            'name' => 'required|string',
            'alias' => 'required|string',
            'code' => 'required',
            'level_id' => 'required|exists:levels,id',
            'department_id' => 'required|exists:departments,id',
            'description' => 'required',
            'requirements' => 'required',
            'uploads' => 'required',
            'learning_outcomes' => 'nullable',
            'career_opportunities' => 'nullable',
        ]));        

        return redirect()->route('courses.show',$course)->with('success','Course Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Course $course)
    {
        if (!isset($request->name)) {

            return view('courses.delete',['course'=>$course]);

        }else{

            if ($request->name != $course->slug) {
                return redirect()->route('courses.show',['course'=>$course])->with('error','Invalid Entry');
            }
            $course->delete();

            return redirect()->route('courses.index')->with('success','Course Deleted Successfully');
        }

    }
}
