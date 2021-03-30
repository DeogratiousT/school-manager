<?php

namespace App\Laratables;

class AcademicSemestersLaratables
{

    public static function laratablesCustomAction($academicSemester)
    {
        return view('academic-semesters.index_action', compact('academicSemester'))->render();
    }
}