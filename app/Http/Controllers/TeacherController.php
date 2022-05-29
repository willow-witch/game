<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TeacherService;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\TeamService;
use App\Services\StageService;
use App\Services\UserService;
use App\Services\StudentService;

class TeacherController extends Controller
{
    protected TeacherService $teacherService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;
    protected TeamService $teamService;
    protected UserService $userService;
    protected StudentService $studentService;

    public function __construct(TeacherService  $teacherService,
                                StageService    $stageService,
                                GameService     $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService,
                                TeamService     $teamService,
                                UserService     $userService,
                                StudentService  $studentService
    )
    {
        $this->teacherService = $teacherService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
        $this->teamService = $teamService;
        $this->userService = $userService;
        $this->studentService = $studentService;

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

        $games = $this->gameService->getGamesForTeacher();

        $stages = $this->stageService->getTeamsForStages();

        $userInformation = $this->teacherService->getUserInformation($userId);

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
        $stages = $this->stageService->getAllStages();

        $stagesCount = $this->stageService->getStagesCount();

        $fields = $this->studentService->getAllFields();

        return view('create_game.create_game',
                    [
                        'stages' => $stages,
                        'stages_count' => $stagesCount,
                        'fields' => $fields
                    ]
        );
    }

    public function showCreateTeamsPage(Request $request)
    {
        $gameName = $request->input('game_name');

        $teamsAmount = $request->input('teams_number');

        $startDate = $request->date('start_date');

        $endDate = $request->date('end_date');

        $fields = $request->input('fields');

        $studentsFromField = $this->studentService->getStudentFromField();

        return view('create_game.create_teams',
                    [
                        "teams_amount" => $teamsAmount,
                        "students" => $studentsFromField
                    ]
        );
    }

    public function showStagePage($stage, $team) {

        $teamName = $this->teamService->getTeamName();

        $answers = $this->teamService->getAnswersForStage($stage, $team);

        $criteria = $this->criteriaService->getCriteriaForTeacherStage1();

        switch ($stage) {
            case 1:
                return view('stages.stage1.teacher_stage1',
                    [
                        'team' => $team,
                        "team_name" => $teamName,
                        'answers' => $answers,
                        'criteria' => $criteria,
                        'stage_id' => 1
                    ]
                );
            case 2:
                return view('stages.stage2.teacher_stage2', [
                    'team' => $team,
                    "team_name" => $teamName,
                    'answers' => $answers,
                    'stage_id' => 2
                ]);
            case 3:
                return view('stages.stage3.teacher_stage3', [
                    'team' => $team,
                    'stage_id' => 3
                ]);
            case 4:
                return view('stages.stage4.teacher_stage4', [
                    'team' => $team,
                    'stage_id' => 4
                ]);
            case 5:
                return view('stages.stage5.teacher_stage5', [
                    'team' => $team,
                    'stage_id' => 5
                ]);
        }
    }
}
