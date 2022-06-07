<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AdminService;
use App\Services\CriteriaService;
use App\Services\GameService;
use App\Services\QuestionService;
use App\Services\StageService;
use App\Services\StudentService;
use App\Services\UserService;

class AdminController extends Controller
{
    protected AdminService $adminService;
    protected StageService $stageService;
    protected GameService $gameService;
    protected QuestionService $questionService;
    protected CriteriaService $criteriaService;
    protected UserService $userService;

    public function __construct(AdminService $adminService,
                                StageService $stageService,
                                GameService $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService,
                                UserService $userService
    )
    {
        $this->adminService = $adminService;
        $this->stageService = $stageService;
        $this->gameService = $gameService;
        $this->questionService = $questionService;
        $this->criteriaService = $criteriaService;
        $this->userService = $userService;

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

        $userInformation = $this->adminService->getUserInformation($userId);
        $userPhoto = $this->adminService->getUserPhotoById($userId);

        // dd($userInformation);

        $stages = $this->stageService->getAllStages();
        $stagesCount = $this->stageService->getStagesCount();

        $games = $this->gameService->getGamesForTeacher();

        return view('main_page.main_admin', [
            'user_information' => $userInformation,
            'photo' => $userPhoto,
            'games' => $games,
            'stages' => $stages,
            'stages_count' => $stagesCount
            ]
        );
    }

    public function showCreateUserPage()
    {
        $roles = $this->userService->getRoles();

        return view('admin_authority.create_user', [
             'roles' => $roles
         ]
        );
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
