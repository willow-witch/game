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

Route::get('student', function()
{
    return View::make('main_student');
});

Route::get('teacher', function()
{
    return View::make('main_teacher');
});

Route::get('logout', function()
{
    return View::make('sign');
});

Route::get('create_game', function()
{
    return View::make('create_game');
});

Route::get('join_game', function()
{
    return View::make('join_game');
});

//Route::get('users', 'UserController@getIndex');


