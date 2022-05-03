<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function showMainPage()
    {
        $userInformation = [
            [
                "key" => "Фамилия",
                "value" => "Иванова"
            ],
            [
                "key" =>  "Имя",
                "value" => "Валерия"
            ],
            [
                "key" => "Отчество",
                "value" => "Андреевна"
            ],
            [
                "key" =>"Курс, Специальность",
                "value" => "4 курс, МОиАИС"
            ],
            [
                "key" => "e-mail",
                "value" => "abc@gmsil.com"
            ]
        ];
        $stages = [
            "Таргетинг",
            "Позиционирование",
            "Brand Equity",
            "Brand Communication",
            "Brand Loyalty"
        ];
        $stagesCount = count($stages);
        $games = [
            [
                "game_name" => "game1",
                "team_name" => "team1"
            ],
            [
                "game_name" => "game3",
                "team_name" => "team5"
            ],
            [
                "game_name" => "game7",
                "team_name" => "team2"
            ]
        ];

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

        $criteria = [
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
        $questions = [
            [
                "question" => "City",
                "type" => "free",
                "answers" => "City"
            ],
            [
                "question" => "Hobbies",
                "type" => "test",
                "answers" => [
                    "Skating",
                    "Swimming",
                    "Sketching",
                    "Writing",
                    "Gaming",
                    "Swimming",
                    "Sketching",
                    "Writing",
                    "Gaming"
                ]
            ],
            [
                "question" => "City",
                "type" => "free",
                "answers" => "City"
            ],
            [
                "question" => "Hobbies",
                "type" => "test",
                "answers" => [
                    "Skating",
                    "Swimming",
                    "Sketching",
                    "Writing",
                    "Gaming"
                ]
            ]
        ];

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
