<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\StageService;
use App\Services\StudentService;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function showWelcomePage()
    {
        return view('welcome');
    }

    public function showSignPage()
    {
        return view('sign');
    }

    public function showLogoutPage()
    {
        Auth::logout();
        Session::flush();

        return redirect(\route('sign'));
    }

    public function registerNewUser(Request $request)
    {
        $userService = resolve(UserService::class);

        $roleId = $userService->getRoleIdFromRusRole($request->input('rus_role'));

        $id = DB::table('users')->insertGetId([
           'email' => $request->input('email'),
           'password' => Hash::make($request->input('password')),
           'role_id' => $roleId
       ]);

        switch ($roleId)
        {
            case 1:
                DB::table('admins')->insert([
                    'id' => $id,
                    'first_name' => $request->input('firstname'),
                    'last_name' => $request->input('lastname'),
                    'photo' => '/img/profilepics/queen.png'
                ]);
                break;
            case 2:
                DB::table('students')->insert([
                 'id' => $id,
                 'first_name' => $request->input('firstname'),
                 'last_name' => $request->input('lastname'),
                 'photo' => '/img/profilepics/woman.png',
                 'year' => $request->input('year'),
                 'field' => $request->input('field')
             ]);
                break;
            case 3:
                DB::table('teachers')->insert([
                 'id' => $id,
                 'first_name' => $request->input('firstname'),
                 'last_name' => $request->input('lastname'),
                 'photo' => '/img/profilepics/queen.png'
             ]);
                break;
        }
        return redirect(\route('admin.create_user'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
              'email' => ['required', 'email'],
              'password' => ['required'],
          ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $userService = resolve(UserService::class);

            $roleId = $userService->getRoleIdByEmail($request->input('email'));
            $userId = $userService->getUserIdByEmail($request->input('email'));

            $userName = $userService->getUserName($userId, $roleId);

            session([
                "user_id" => $userId,
                "user_name" => $userName
            ]);


            return match ($roleId)
            {
                1 => redirect(\route('admin.profile')),
                2 => redirect(\route('student.profile')),
                3 => redirect(\route('teacher.profile')),
                default => redirect(\route('sign')),
            };
        }

        return Redirect::back()->withErrors(['msg' => 'Неверный логин или пароль!']);
    }

    public function sign()
    {

    }
}
