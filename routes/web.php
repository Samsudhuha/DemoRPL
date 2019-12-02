<?php

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

use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/delete/{id}', 'TeacherController@delete');
Route::get('/edit/{id}', 'TeacherController@edit');
Route::post('/edit/{id}', 'TeacherController@edit_data');
Route::post('/comment', 'StudentController@comment');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('teacher')->middleware('isTeacher')->group(function(){
    route::get('/', 'TeacherController@teacherPage');
    Route::post('/upload-assignment', 'AssignmentController@uploadAssignment')->name('upload.assignment');
});

Route::prefix('student')->middleware('isStudent')->group(function(){
    route::get('/', 'StudentController@studentPage');
});

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    route::get('/', 'AdminController@adminPage');
});
