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
use App\Services\AnswerService;


class AnswersController extends Controller
{
    protected AnswerService $answerService;

    public function __construct(AnswerService $answerService)
    {
        $this->answerService = $answerService;
    }

    public function addAnswers(Request $request)
    {
        // dd($request->all());
        $stage_id = $request->input('stage_id');
        unset($request['stage_id']);
        $game_id = $request->input('game_id');
        unset($request['game_id']);
        $group_id = $request->input('group_id');
        unset($request['group_id'], $request['_token']);

        $image = $this->answerService->handleImage($request);

        switch ($stage_id)
        {
            case 1:
                $this->answerService->addImageStage1($image, $game_id, $group_id);
                return redirect(\route('student.profile'));

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
                return 3;

            case 4:
                return 4;

            case 5:
                return 5;

        }
        //

        //DB

        return 1;

    }
}
