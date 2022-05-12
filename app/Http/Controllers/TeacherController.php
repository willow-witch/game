<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\TeacherService;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\TeamService;
use App\Services\StageService;

class TeacherController extends Controller
{
    protected TeacherService $teacherService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;
    protected TeamService $teamService;

    public function __construct(TeacherService $teacherService,
                                StageService $stageService,
                                GameService $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService,
                                TeamService $teamService
    )
    {
        $this->teacherService = $teacherService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
        $this->teamService = $teamService;
    }

    public function showMainPage()
    {
        $games = $this->gameService->getGames();

        $stages = $this->stageService->getTeamsForStages();

        $userInformation = $this->teacherService->getUserInformation();

        return view('main_page.main_teacher',
                    [
                        'games' => $games,
                        'stages' => $stages,
                        'user_information' => $userInformation
                    ]
        );
    }

    public function showCreateGamePage()
    {
        return view('create_game');
    }

    public function showStagePage($stage, $team) {

        $teamName = $this->teamService->getTeamName();

        $answers = $this->teamService->getAnswersForStage($stage);

        $criteria = $this->criteriaService->getCriteriaForTeacher();

        switch ($stage) {
            case 1:
                return view('stages.stage1.teacher_stage1',
                    [
                        'team' => $team,
                        "team_name" => $teamName,
                        'answers' => $answers,
                        'criteria' => $criteria
                    ]
                );
            case 2:
                return view('stages.stage2.teacher_stage2', ['team' => $team]);
            case 3:
                return view('stages.stage3.teacher_stage3', ['team' => $team]);
            case 4:
                return view('stages.stage4.teacher_stage4', ['team' => $team]);
            case 5:
                return view('stages.stage5.teacher_stage5', ['team' => $team]);
        }
    }
}
