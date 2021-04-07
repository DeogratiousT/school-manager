<?php

namespace App\Http\Controllers;

use App\Models\StudentApplicationMedia;
use App\Models\StudentApplication;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StudentApplicationMediaController extends Controller
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
    public function create($id)
    {
        $studentApplication = StudentApplication::find($id);
        
        return view('student-application-media.create',['studentApplication'=>$studentApplication]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $studentApplication = StudentApplication::find($id);

        $studentApplicationMedia = new StudentApplicationMedia;

        //Handle File upload
        if($request->hasFile('file')){
            //Get File Name with the Extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just File name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just Ext
            $extension = $request->file('file')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.Str::random('5').'.'.$extension;
            //Upload Image
            $path = $request->file('file')->storeAs('public/'.$studentApplication->id ,$fileNameToStore, 'public');

        }else{
            return redirect()->route('students.media.create',$studentApplication)->with('error','No Files Selected');
        }

        $studentApplicationMedia->name = $fileNameToStore;

        $studentApplicationMedia->student_application_id = $id;

        $studentApplicationMedia->save();

        return redirect()->route('students.media.create',$studentApplication)->with('success','Files Uploaded Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentApplicationMedia  $studentApplicationMedia
     * @return \Illuminate\Http\Response
     */
    public function show(StudentApplicationMedia $studentApplicationMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentApplicationMedia  $studentApplicationMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentApplicationMedia $studentApplicationMedia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentApplicationMedia  $studentApplicationMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentApplicationMedia $studentApplicationMedia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentApplicationMedia  $studentApplicationMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentApplicationMedia $studentApplicationMedia)
    {
        //
    }
}
