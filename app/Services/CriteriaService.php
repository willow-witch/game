<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\TeacherService;

class CriteriaService
{
    public function getCriteriaForStudentStage1($gameId) : array
    {
        $stage = 1;

        $team = app(TeamService::class)->getTeam(session('user_id'), $gameId);

        if (empty(app(TeacherService::class)->getJudgesForGameStage($gameId, $stage)))
        {
            $teachers = app(TeacherService::class)->getJudgesForGameStage($gameId, $stage);
        }
        else
        {
            $teachers = app(TeacherService::class)->getAllTeachers();
        }

        $criteria = $this->getGrades($team);
        $result_criteria = [];

        foreach ($criteria as $item)
        {
            $result_criteria[] = [
                "criteria_name" => $item["criteria_name"],
                "points" => explode(',', $item["score"])
            ];
        }

        return [
            "teachers" => $teachers,
            "criteria" => $result_criteria
        ];
    }

    public function getTeachersEvaluationStage1($gameId, $teamId)
    {
        $teacherId = session('user_id');
        $teacherName = app(UserService::class)->getUserName($teacherId, 3);

        $result = DB::table('stage1_teachers_evaluation')
                    ->select(DB::raw(
                        'stage1_criteria.criteria as "criteria_name",
                              stage1_teachers_evaluation.score'))
                    ->leftJoin('stage1_criteria', 'stage1_criteria.id',
                      'stage1_teachers_evaluation.criteria_id')
                    ->where('stage1_teachers_evaluation.group_id','=', $teamId)
                    ->get();

        $result = json_decode(json_encode($result, true), true);
        $result_criteria = [];

        foreach ($result as $item)
        {
            $result_criteria[] = [
                "criteria_name" => $item["criteria_name"],
                "points" => [
                    $item["score"]
                ]
            ];
        }

        return [
            "teachers" => [
                $teacherName
            ],
            "criteria" => $result_criteria
        ];
    }

    public function getCriteriaForTeacherStage1() : array
    {
        $result = DB::table('stage1_criteria')
                         ->select(DB::raw(
                             'stage1_criteria.criteria as "criteria_name",
                              stage1_criteria.max_point'))
                         ->get();

        $result = json_decode(json_encode($result, true), true);

        return $result;
    }

    public function getCriteriaIdByName($name)
    {
        return DB::table('stage1_criteria')
                 ->select(DB::raw(
                     'stage1_criteria.id as "criteria_id"'))
                 ->where('criteria', 'like', $name)
                 ->value("criteria_id");
    }

    public function getGrades($team)
    {
        $result = DB::table('stage1_teachers_evaluation')
                 ->select(DB::raw(
                     'stage1_criteria.criteria as "criteria_name",
                      group_concat(stage1_teachers_evaluation.score) as "score"'))
                 ->leftJoin('stage1_criteria', 'stage1_criteria.id',
                            'stage1_teachers_evaluation.criteria_id')
                 ->where('group_id', '=', $team)
                 ->groupBy("criteria")
                 ->get();

        return json_decode(json_encode($result, true), true);
    }


}
