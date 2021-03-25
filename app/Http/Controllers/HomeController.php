<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::orderBy('created_at','DESC')->take(3)->get();

        return view('home.index',['courses'=>$courses]);
    }

    public function contactUs()
    {
        return view('home.contact_us');
    }

    public function aboutUs()
    {
        return view('home.about_us');
    }

}
