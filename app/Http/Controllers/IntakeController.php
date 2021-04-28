<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Laratables\IntakesLaratables;

class IntakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            return Laratables::recordsOf(Intake::class, IntakesLaratables::class);
        }

        return view('intakes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Intake::create($request->validate([
            'name' => 'required|unique:intakes,name',
        ]));

        return redirect()->route('intakes.index')->with('success','Intake Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function show(Intake $intake)
    {
        return view('intakes.show',['intake'=>$intake]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function edit(Intake $intake)
    {
        return view('intakes.edit',['intake'=>$intake]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Intake $intake)
    {
        $intake->update($request->validate([
            'name' => 'required',
        ]));

        return redirect()->route('intakes.index')->with('success','Intake Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Intake  $intake
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Intake $intake)
    {
        if (!isset($request->name)) {

            return view('intakes.delete',['intake'=>$intake]);

        }else{

            if ($request->name != $intake->slug) {
                return redirect()->route('intakes.show',['intake'=>$intake])->with('error','Invalid Entry');
            }
            $intake->delete();

            return redirect()->route('intakes.index')->with('success','intake Deleted Successfully');
        }
    }
}
