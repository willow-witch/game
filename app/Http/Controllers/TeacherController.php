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
use App\Services\AnswerService;

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
    protected AnswerService $answerService;

    public function __construct(TeacherService  $teacherService,
                                StageService    $stageService,
                                GameService     $gameService,
                                QuestionService $questionService,
                                CriteriaService $criteriaService,
                                TeamService     $teamService,
                                UserService     $userService,
                                StudentService  $studentService,
                                AnswerService   $answerService
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
        $this->answerService = $answerService;

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

        $games = $this->gameService->getGamesForTeacher($userId);

        $result = [];
        foreach ($games as $game)
        {
            $result[] = [
                "game_id" => $game["game_id"],
                "status" => $game["status"],
                "game_name" => $game["game_name"],
                "stages" => $this->stageService->getTeamsForStages($userId, $game["game_id"])
            ];
        }

        // dd($result);

        $userInformation = $this->teacherService->getUserInformation($userId);
        $userPhoto = $this->teacherService->getUserPhotoById($userId);

        return view('main_page.main_teacher',
                    [
                        'content' => $result,
                        'user_information' => $userInformation,
                        'user_photo' => $userPhoto
                    ]
        );
    }

    public function showCreateGamePage()
    {
        $stages = $this->stageService->getAllStages();

        $stagesCount = $this->stageService->getStagesCount();

        $fields = $this->studentService->getAllFields();

        $teachers = $this->teacherService->getAllTeachers();

        return view('create_game.create_game',
                    [
                        'stages' => $stages,
                        'stages_count' => $stagesCount,
                        'fields' => $fields,
                        'teachers' => $teachers
                    ]
        );
    }

    public function showCreateTeamsPage(Request $request)
    {
        $gameName = $request->input('game_name');

        $teamsAmount = $request->input('teams_number');
        $startDate = $request->date('start_date');
        $endDate = $request->date('end_date');

        $judges = [];
        foreach($request->all() as $key => $value) {

            if (str_contains($key, "judges")) {
                $judges[] = [
                    $key => $value
                ];
            }
        }
        $judgesCount = count($judges);

        $gameId = $this->gameService->createGame($startDate, $endDate, $teamsAmount);

        for($i=1; $i <= $judgesCount; $i++)
        {
            $stageJudges = array_values($judges[$i-1]);

            foreach ($stageJudges as $stageJudge)
            {
                $teacherId = $this->teacherService->getTeacherId($stageJudge[0]);

                $this->teacherService->setJudgeForGameStage($gameId, $teacherId, $i);
            }
        }

        $fields = implode($request->input('field'));
        $studentsFromField = $this->studentService->getStudentFromField($fields);

        return view('create_game.create_teams',
                    [
                        "teams_amount" => $teamsAmount,
                        "students" => $studentsFromField,
                        "start_date" => $startDate,
                        "end_date" => $endDate,
                        "game_id" => $gameId
                    ]
        );
    }

    public function createGame(Request $request)
    {
        $teamsAmount = $request->input('teams_amount');
        $startDate = $request->date('start_date');
        $endDate = $request->date('end_date');
        $gameId = $request->input('game_id');
        unset(
            $request['_token'],
            $request['teams_amount'],
            $request['start_date'],
            $request['end_date'],
            $request['game_id']
        );


        $data = $request->all();
        $requestLength = count($data)/2;

        // dd($data);

        for($i=0; $i<$requestLength; $i++)
        {
            $teamName = $data["team_name".$i+1];
            $members = $data["students".$i+1];

            $teamId = $this->teamService->createTeam($teamName, $startDate, $endDate, count($members));
            $this->gameService->bindGroupToGame($teamId, $gameId);

            foreach ($members as $member)
            {
                $studentId = $this->studentService->getStudentIdByName($member);

                $this->gameService->bindStudentToGame($studentId, $gameId);
                $this->teamService->bindStudentToGroup($studentId, $teamId);
            }
        }

        return redirect(\route('teacher.profile'));
    }

    public function showStagePage($stage, $team) {

        $teamName = $this->teamService->getTeamName($team);

        $game = $this->gameService->getGameByTeam($team);
        $answers = $this->teamService->getAnswersForStage($stage, $team, $game);

        switch ($stage) {
            case 1:
                $evaluation = $this->criteriaService->getTeachersEvaluationStage1($game, $team);
                $criteria = $this->criteriaService->getCriteriaForTeacherStage1();
                $image = $this->teamService->getImageStage1($team, $game);

                return view('stages.stage1.teacher_stage1',
                    [
                        'team' => $team,
                        "team_name" => $teamName,
                        'answers' => $answers,
                        'criteria' => $criteria,
                        'evaluation' => $evaluation,
                        'stage_id' => 1,
                        'image' => $image
                    ]
                );
            case 2:
                if(!empty($answers)){
                    $image = array_pop($answers)['answer'];
                }
                else{
                    $image = '';
                }

                $evaluation = $this->answerService->getTeachersEvaluationStage2($game, $team);

                return view('stages.stage2.teacher_stage2', [

                    'team' => $team,
                    "team_name" => $teamName,
                    'answers' => $answers,
                    'score' => $evaluation,
                    'stage_id' => 2,
                    'image' => $image
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
