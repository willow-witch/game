<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services;
use App\Services\StudentService;
use App\Services\StageService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\CriteriaService;
use App\Http\Requests\StudentProfileRequest;

class StudentController extends Controller
{
    protected StudentService $studentService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;

    public function __construct(StudentService $studentService,
                                StageService $stageService,
                                GameService $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService
                                )
    {
        $this->studentService = $studentService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
    }

    public function showMainPage()
    {
        $userInformation = $this->studentService->getUserInformation();
        $stages = $this->stageService->getAllStages();
        $stagesCount = $this->stageService->getStagesCount();
        $games = $this->gameService->getGames();

        return view('main_page.main_student', [
            'games' => $games,
            'stages' => $stages,
            'stages_count' => $stagesCount,
            'user_information' => $userInformation
        ]);
    }

    public function showJoinGamePage()
    {
        return view('join_game');
    }

    public function showStagePage($stage) {

        $criteria = $this->criteriaService->getCriteriaForStudent();
        $questions = $this->questionService->getQuestionsForStudent();

        switch ($stage) {
            case 1:
                return view('stages.stage1.student_stage1', ['criteria' => $criteria, 'questions' => $questions]);
            case 2:
                return view('stages.stage2.student_stage2');
            case 3:
                return view('stages.stage3.student_stage3');
            case 4:
                return view('stages.stage4.student_stage4');
            case 5:
                return view('stages.stage5.student_stage5');
        }
    }

}
