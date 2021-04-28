<?php

namespace App\Laratables;

class IntakesLaratables
{
    public static function laratablesCustomAction($intake)
    {
        return view('intakes.index_action', compact('intake'))->render();
    }

    public static function laratablesAdditionalColumns()
    {
        return ['slug'];
    }
}