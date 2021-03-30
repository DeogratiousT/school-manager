<?php

namespace App\Laratables;

class CourseSemestersLaratables
{

    public static function laratablesCustomAction($courseSemester)
    {
        return view('course-semesters.index_action', compact('courseSemester'))->render();
    }
}