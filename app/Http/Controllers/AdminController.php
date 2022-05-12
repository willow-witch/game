<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AdminService;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\StageService;
use App\Services\StudentService;

class AdminController extends Controller
{
    protected AdminService $adminService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;

    public function __construct(AdminService $adminService,
                                StageService $stageService,
                                GameService $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService
    )
    {
        $this->adminService = $adminService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
    }

    public function showMainPage()
    {
        $userInformation = $this->adminService->getUserInformation();
        $stages = $this->stageService->getAllStages();
        $stagesCount = $this->stageService->getStagesCount();

        $games = $this->gameService->getGames();

        return view('main_page.main_admin', [
            'user_information' => $userInformation,
            'games' => $games,
            'stages' => $stages,
            'stages_count' => $stagesCount
            ]
        );
    }

    public function showCreateUserPage()
    {
        return view('admin_authority.create_user');
    }

    public function showEditQuestionsPage($stage)
    {
        return view('admin_authority.edit_questions', ['stage' => $stage]);
    }

    public function showEditCriteriaPage($stage)
    {
        return view('admin_authority.edit_criteria', ['stage' => $stage]);
    }
}
