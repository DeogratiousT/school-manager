<?php

namespace App\Laratables;

class StudentApplicationsLaratables
{

    public static function laratablesCustomAction($studentApplication)
    {
        return view('student-applications.index_action', compact('studentApplication'))->render();
    }

    public static function laratablesCustomState($studentApplication)
    {
        return view('student-applications.index_status', compact('studentApplication'))->render();
    }

    public static function laratablesAdditionalColumns()
    {
        return ['status'];
    }
}