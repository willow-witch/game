<?php

namespace App\Services;

class GameService
{
    public function getGames(): array
    {
        return [
            [
                "game_name" => "game1",
                "status" => "не завершено",
                "team_name" => "team1"
            ],
            [
                "game_name" => "game3",
                "status" => "не завершено",
                "team_name" => "team5"
            ],
            [
                "game_name" => "game7",
                "status" => "не завершено",
                "team_name" => "team2"
            ]
        ];
    }
}
