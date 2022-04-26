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

Route::get('/', function () {
    return view('welcome');
});

Route::get('sign', function()
{
    return View::make('sign');
});

Route::get('/logout', function()
{
    return View::make('sign');
});

Route::prefix('student')->group(function () {
    Route::get('/profile', function () {
        return View::make('main_student');
    });

    Route::get('/stage/{stage}', function($stage)
    {
        switch ($stage) {
            case 1:
                return View::make('stages.stage1.student_stage1');
            case 2:
                return View::make('stages.stage2.student_stage2');
            case 3:
                return View::make('stages.stage3.student_stage3');
            case 4:
                return View::make('stages.stage4.student_stage4');
            case 5:
                return View::make('stages.stage5.student_stage5');
        }
    });

    Route::get('join_game', function()
    {
        return View::make('join_game');
    });
});

Route::prefix('teacher')->group(function () {
    Route::get('/profile', function () {
        return View::make('main_teacher');
    });

    Route::get('/stage/{stage}', function($stage)
    {
        switch ($stage) {
            case 1:
                return View::make('stages.stage1.teacher_stage1');
            case 2:
                return View::make('stages.stage2.teacher_stage2');
            case 3:
                return View::make('stages.stage3.teacher_stage3');
            case 4:
                return View::make('stages.stage4.teacher_stage4');
            case 5:
                return View::make('stages.stage5.teacher_stage5');
        }
    });

    Route::get('create_game', function()
    {
        return View::make('create_game');
    });
});

//Route::get('users', 'UserController@getIndex');


