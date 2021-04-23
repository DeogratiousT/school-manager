<?php

namespace App\Laratables;

class DepartmentsLaratables
{

    public static function laratablesCustomAction($department)
    {
        return view('departments.index_action', compact('department'))->render();
    }
}