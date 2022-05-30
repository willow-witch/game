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
        //dd($request->all());
        $stage_id = $request->input('stage_id');
        unset($request['stage_id']);
        $game_id = $request->input('game_id');
        unset($request['game_id']);
        $group_id = $request->input('group_id');
        unset($request['group_id']);
        unset($request['_token']);

        //dd($request->all());

        switch ($stage_id)
        {
            case 1:
                return 1;
            break;

            case 2:
               foreach ($request -> all() as $key => $item) {
                    //var_dump($key);
                    DB::table('stage2_answers_students')->insert(
                        [
                            'question_id' => $key,
                            'answer'=> $item,
                            'game_id' => $game_id,
                            'group_id' => $group_id,
                            'answer_date'=>date('Y-m-d H:i:s'),
                            'active'=>1
                        ]
                    );
                }

            break;

            case 3:
                return 1;
            break;

            case 4:
                return 1;
            break;

            case 5:
                return 1;
            break;

        }
        //

        //DB

        return 1;

    }
}
