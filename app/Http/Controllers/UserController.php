<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Authenticate;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\StageService;
use App\Services\StudentService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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
        return view('sign');
    }

    public function registerNewUser(Request $request)
    {
        //$email = $request->input('email');
        //$password = $request->input('password');
        //echo "зарегистрировано";
        //request ('localhost/teacher/profile');
        //Route::get('/sign', function (){
        //    return view('teacher/profile');
        //dd($email,$password);
        //echo "зарегистрировано";
        //});
        //$formField = $request -> only (['email', 'password']);

        //dd($request->all());

        $roleId = $this->userService->getRoleIdFromRusRole($request->input('rus_role'));

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

        //if (Auth::attempt($formField)){
        //    return redirect()->intended(route('teacher/profile'));
        //}

        //return  redirect(route('user.sign'))->withErrors([
        //   'email'=>'aaaaaaa'
        //]);
    }

    public function login(Request $request)
    {
        // dd($request->all());

        // $email = $request->input('email');
        //
        // $id = DB::table('users')->where('id');
        // $role = ;

        //выведет студента
        return redirect(\route('student.profile'));

        //выведет студента
        // return app(TeacherController::class)->showMainPage();

        //выведет студента
        // return app(AdminController::class)->showMainPage();
    }

    public function sign()
    {

    }
}
