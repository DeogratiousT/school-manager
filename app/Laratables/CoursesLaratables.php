<?php

namespace App\Laratables;

class CoursesLaratables
{

    public static function laratablesCustomAction($course)
    {
        return view('courses.index_action', compact('course'))->render();
    }

    public static function laratablesAdditionalColumns()
    {
        return ['slug'];
    }
}