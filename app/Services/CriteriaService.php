<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CriteriaService
{
    public function getCriteriaForStudentStage1() : array
    {
        return [
            "teachers" => [
                "Фамилия Имя",
                "Фамилия Имя",
                "Фамилия Имя"
            ],
            "criteria" => [
                [
                    "criteria_name" => "Качество анализа",
                    "points" => [
                        "7",
                        "7",
                        "8"
                    ]
                ],
                [
                    "criteria_name" => "Последовательность стратегии",
                    "points" => [
                        "5",
                        "6",
                        "7"
                    ]
                ],
                [
                    "criteria_name" => "Освоение концепции таргетинга",
                    "points" => [
                        "9",
                        "8",
                        "7"
                    ]
                ]
            ]
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


}
