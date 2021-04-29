<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes(['verify' => true]);

Route::middleware(['auth','verified'])->group(function () {

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('courses', 'CourseController');
    Route::resource('course-semesters', 'CourseSemesterController');
    Route::resource('years', 'YearController');
    Route::resource('courses.years', 'CourseYearController');
    Route::resource('courses.years.semesters', 'CourseYearSemesterController');
    Route::resource('courses.years.semester.units', 'CourseYearSemesterUnitController');

    Route::resource('students', 'StudentApplicationController');
    Route::resource('students.media', 'StudentApplicationMediaController');

    Route::resource('academic-years', 'AcademicYearController');
    Route::resource('academic-semesters', 'AcademicSemesterController');
    Route::resource('intakes','IntakeController');
    Route::resource('intakes.courses','IntakeCourseController');

    Route::resource('counties', 'CountyController');
    Route::resource('units', 'UnitController');
    Route::resource('levels', 'LevelController');
    Route::resource('departments', 'DepartmentController');

});