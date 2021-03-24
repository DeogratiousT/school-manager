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
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('courses', 'CourseController');
Route::get('course-application','StudentApplicationController@create')->name('course-application');
Route::get('course-application/store','StudentApplicationController@store')->name('course-application-store');

Route::get('learn','LearnController@index')->name('learn-index');
Route::get('learn/{course}','LearnController@show')->name('learn-show');
Route::get('learn/{course}/enroll','LearnController@enroll')->name('learn-enroll');
