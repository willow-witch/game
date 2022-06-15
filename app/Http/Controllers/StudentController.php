<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services;
use App\Services\StudentService;
use App\Services\StageService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\CriteriaService;
use App\Services\UserService;
use App\Services\TeamService;
use App\Http\Requests\StudentProfileRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected StudentService $studentService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;
    protected UserService $userService;
    protected TeamService $teamService;

    public function __construct(StudentService $studentService,
                                StageService $stageService,
                                GameService $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService,
                                UserService $userService,
                                TeamService $teamService
                                )
    {
        $this->studentService = $studentService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
        $this->userService = $userService;
        $this->teamService = $teamService;

        view()->composer('layout_main', function ($view) {
            $view->with('user_name', session('user_name'));
        });

        view()->composer('stages.stage', function ($view) {
            $view->with('stages', $this->stageService->getAllStages());
        });
    }

    public function showMainPage()
    {
        $userId = session('user_id');

        $userInformation = $this->studentService->getUserInformation($userId);
        $userPhoto = $this->studentService->getUserPhotoById($userId);
        $stages = $this->stageService->getAllStages();
        $stagesCount = $this->stageService->getStagesCount();
        $games = $this->gameService->getGames($userId);

        return view('main_page.main_student', [
            'games' => $games,
            'stages' => $stages,
            'stages_count' => $stagesCount,
            'user_information' => $userInformation,
            'user_photo' => $userPhoto
        ]);
    }

    public function showJoinGamePage()
    {
        return view('join_game');
    }

    public function showStagePage(Request $request)
    {
        $stage = $request->input('stage');

        $stages = $this->stageService->getAllStages();
        $stagesCount = $this->stageService->getStagesCount();

        $team = $request->input('group_id');
        $teamName = $this->teamService->getTeamName($team);
        $game = $request->input('game_id');

        switch ($stage) {
            case 1:
                $criteria = $this->criteriaService->getCriteriaForStudentStage1($request->input('game_id'));
                $image = $this->teamService->getImageStage1($team, $game);

                if($this->teamService->getImageStage1($team, $game))
                {
                    $answers = $this->teamService->getAnswersForStage($stage, $team, $game);

                    return view('stages.stage1.student_stage1',
                    [
                        'team' => $team,
                        "team_name" => $teamName,
                        'answers' => $answers,
                        'criteria' => $criteria,
                        'stage_id' => 1,
                        'image' => $image
                    ]
                    );
                }

                $questions = $this->questionService->getQuestionsForStudentStage1();

                return view('stages.stage1.student_stage1', [
                    'criteria' => $criteria,
                    'questions' => $questions,
                    'stage_id'=> 1,
                    'group_id'=> $team,
                    'game_id'=> $game
                ]);

            case 2:
                $questions = $this->questionService->getQuestionsForStudentStage2();
                $criteria = $this->criteriaService->getCriteriaForStudentStage1();

                //dd($request->all());

                return view('stages.stage2.student_stage2', [
                    'stages' => $stages,
                    'questions' => $questions,
                    'criteria' => $criteria,
                    'stage_id'=> 2,
                    'stages_count' => $stagesCount,
                    'group_id'=>$request->input('group_id'),
                    'game_id'=>$request->input('game_id')

                ]);
            case 3:
                return view('stages.stage3.student_stage3', [
                    'stages' => $stages,
                    'stage_id'=> 3,
                    'stages_count' => $stagesCount
                ]);
            case 4:
                return view('stages.stage4.student_stage4', [
                    'stages' => $stages,
                    'stage_id'=> 4,
                    'stages_count' => $stagesCount
                ]);
            case 5:
                return view('stages.stage5.student_stage5', [
                    'stages' => $stages,
                    'stage_id'=> 5,
                    'stages_count' => $stagesCount
                ]);
        }
    }

}
