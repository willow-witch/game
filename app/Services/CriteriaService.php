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

        // return [
        //     "teachers" => [
        //         "Фамилия Имя",
        //         "Фамилия Имя",
        //         "Фамилия Имя"
        //     ],
        //     "criteria" => [
        //         [
        //             "criteria_name" => "Качество анализа",
        //             "points" => [
        //                 "7",
        //                 "7",
        //                 "8"
        //             ]
        //         ],
        //         [
        //             "criteria_name" => "Последовательность стратегии",
        //             "points" => [
        //                 "5",
        //                 "6",
        //                 "7"
        //             ]
        //         ],
        //         [
        //             "criteria_name" => "Освоение концепции таргетинга",
        //             "points" => [
        //                 "9",
        //                 "8",
        //                 "7"
        //             ]
        //         ]
        //     ]
        // ];
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
