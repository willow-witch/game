<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
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
                "key" =>"Роль",
                "value" => "Администратор"
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
