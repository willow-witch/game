<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [UserController::class, 'showWelcomePage']);

Route::get('sign', [UserController::class, 'showSignPage']);

Route::get('/logout', [UserController::class, 'showLogoutPage']);

Route::post('login', [UserController::class, 'login']);

Route::prefix('student')->group(function () {
    Route::get('/profile', [StudentController::class, 'showMainPage'])->name('student.profile');

    Route::get('/stage/{stage}', [StudentController::class, 'showStagePage']);

    Route::get('join_game', [StudentController::class, 'showJoinGamePage']);
});



Route::prefix('teacher')->group(function () {
    Route::get('/profile', [TeacherController::class, 'showMainPage']);

    Route::get('/stage/{stage}/team/{team}', [TeacherController::class, 'showStagePage']);

    Route::get('create_game', [TeacherController::class, 'showCreateGamePage']);

    Route::post('create_teams', [TeacherController::class, 'showCreateTeamsPage'])->name('create_teams');
});

Route::prefix('admin')->group(function () {
    Route::get('/profile', [AdminController::class, 'showMainPage']);

    Route::get('create_user', [AdminController::class, 'showCreateUserPage'])->name('admin.create_user');

    Route::get('edit/stage/{stage}/questions', [AdminController::class, 'showEditQuestionsPage']);

    Route::get('edit/stage/{stage}/criteria', [AdminController::class, 'showEditCriteriaPage']);

    Route::post('registration',[UserController::class, 'registerNewUser']);

});



