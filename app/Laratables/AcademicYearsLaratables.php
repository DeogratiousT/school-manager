<?php

namespace App\Laratables;

class AcademicYearsLaratables
{

    public static function laratablesCustomAction($academicYear)
    {
        return view('academic-years.index_action', compact('academicYear'))->render();
    }
}