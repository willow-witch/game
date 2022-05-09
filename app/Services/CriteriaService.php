<?php

namespace App\Services;

class CriteriaService
{
    public function getCriteriaForStudent() : array
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

    public function getCriteriaForTeacher() : array
    {
        return [
            [
                "criteria_name" => "criteria1",
                "type" => "free",
                "max_point" => "10",
                "score" => "score1"
            ],
            [
                "criteria_name" => "criteria2",
                "type" => "radio",
                "max_point" => "10",
                "score" => "score2"
            ],
            [
                "criteria_name" => "criteria2",
                "type" => "range",
                "max_point" => "100",
                "score" => "score2"
            ]
        ];
    }
}
