<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function showMainPage()
    {
        $games = [
            [
                "game_name" => "game1",
                "status" => "не завершено"
            ],
            [
                "game_name" => "game2",
                "status" => "не завершено"
            ],
            [
                "game_name" => "game3",
                "status" => "не завершено"
            ]
        ];

        $stages = [
            [
                "stage_name" => "Таргетинг",
                "teams" => [
                    "team1",
                    "team2",
                    "team3"
                ]
            ],
            [
                "stage_name" => "Позиционирование",
                "teams" => [
                    "team1",
                    "team2",
                    "team3"
                ]
            ],
            [
                "stage_name" => "Brand Equity",
                "teams" => [
                    "team1",
                    "team2",
                    "team3"
                ]
            ],
            [
                "stage_name" => "Brand Communication",
                "teams" => [
                    "team1",
                    "team2",
                    "team3"
                ]
            ],
            [
                "stage_name" => "Brand Loyalty",
                "teams" => [
                    "team1",
                    "team2",
                    "team3"
                ]
            ]
        ];

        $userInformation = [
            [
                "key" => "Фамилия",
                "value" => "Зонин"
            ],
            [
                "key" =>  "Имя",
                "value" => "Никита"
            ],
            [
                "key" => "Отчество",
                "value" => "Андреевич"
            ],
            [
                "key" =>"Должность",
                "value" => "Преподаватель"
            ],
            [
                "key" => "e-mail",
                "value" => "abc@gmsil.com"
            ]
        ];

        return view('main_page.main_teacher',
                    [
                        'games' => $games,
                        'stages' => $stages,
                        'user_information' => $userInformation
                    ]
        );
    }

    public function showCreateGamePage()
    {
        return view('create_game');
    }

    public function showStagePage($stage, $team) {

        $teamName = "team1";

        $answers = [
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

        $criteria = [
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

        switch ($stage) {
            case 1:
                return view('stages.stage1.teacher_stage1',
                    [
                        'team' => $team,
                        "team_name" => $teamName,
                        'answers' => $answers,
                        'criteria' => $criteria
                    ]
                );
            case 2:
                return view('stages.stage2.teacher_stage2', ['team' => $team]);
            case 3:
                return view('stages.stage3.teacher_stage3', ['team' => $team]);
            case 4:
                return view('stages.stage4.teacher_stage4', ['team' => $team]);
            case 5:
                return view('stages.stage5.teacher_stage5', ['team' => $team]);
        }
    }
}
