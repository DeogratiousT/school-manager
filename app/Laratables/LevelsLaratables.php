<?php

namespace App\Laratables;

class LevelsLaratables
{

    public static function laratablesCustomAction($level)
    {
        return view('levels.index_action', compact('level'))->render();
    }
}