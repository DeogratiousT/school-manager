<?php

namespace App\Laratables;

class YearsLaratables
{

    public static function laratablesCustomAction($year)
    {
        return view('years.index_action', compact('year'))->render();
    }
}