<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class CriteriaService
{
    public function getCriteriaForStudentStage1() : array
    {
        return [
            "teachers" => [
                "teacher1",
                "teacher2",
                "teacher3"
            ],
            "criteria" => [
                [
                    "criteria_name" => "criteria1",
                    "points" => [
                        "c1p1",
                        "c1p2",
                        "c1p3"
                    ]
                ],
                [
                    "criteria_name" => "criteria2",
                    "points" => [
                        "c2p1",
                        "c1p2",
                        "c2p3"
                    ]
                ],
                [
                    "criteria_name" => "criteria3",
                    "points" => [
                        "c3p1",
                        "c3p2",
                        "c3p3"
                    ]
                ],
                [
                    "criteria_name" => "criteria4",
                    "points" => [
                        "c1p1",
                        "c1p2",
                        "c1p3"
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


}
