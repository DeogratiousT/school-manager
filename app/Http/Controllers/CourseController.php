<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\CoursesLaratables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
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
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;

        $request->validate([
            'name' => 'required|string|unique:courses,name',
            'description' => 'required',
            'uploads' => 'nullable',
            'requirements'=> 'required',
            'cover_image' => 'required|file'
        ]);

        $course->name = $request->name;
        $course->description = $request->description;
        $course->uploads = $request->uploads;
        $course->requirements = $request->requirements;

        //Handle File upload
        if($request->hasFile('cover_image')){
            //Get File Name with the Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just File name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.Str::random('5').'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('cover-images', $fileNameToStore, 'public');
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $course->cover_image = $fileNameToStore;

        $course->save();

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
        return view('courses.show',['course'=>$course]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit',['course'=>$course]);
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
        if (isset($request->name)) {

            $request->validate([
                'name' => 'required|string',
            ]);

            $course->name = $request->name;
        }

        if (isset($request->description)) {

            $request->validate([
                'description' => 'required',
            ]);

            $course->description = $request->description;
        }

        if (isset($request->uploads)) {

            $request->validate([
                'uploads' => 'required',
            ]);

            $course->uploads = $request->uploads;
        }

        if (isset($request->requirements)) {

            $request->validate([
                'requirements' => 'required',
            ]);

            $course->requirements = $request->requirements;
        }

        //Handle File upload
        if($request->hasFile('cover_image')){
            //Get File Name with the Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just File name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.Str::random('5').'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('cover-images', $fileNameToStore, 'public');

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $course->cover_image = $fileNameToStore;

        $course->save();

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
        }

        if ($request->name != $course->slug) {
            return back()->with('error', 'Incorrect Value');
        }

        $course->delete();

        return redirect()->route('courses.index')->with('success','Course Deleted Successfully');

    }
}
