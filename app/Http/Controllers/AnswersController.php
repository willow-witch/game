<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\StageService;
use App\Services\StudentService;
use App\Services\UserService;
use App\Services\TeamService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class AnswersController extends Controller
{
    public function addAnswers(Request $request)
    {

        dd($request->all());

        return 1;

    }
}
