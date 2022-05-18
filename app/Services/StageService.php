<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class StageService
{
    public function getAllStages()
    {
        return DB::table('stages')->pluck('stage');
    }

    public function getStagesCount(): int
    {
        return DB::table('stages')->count();
    }

    public function getTeamsForStages()
    {
        return [
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
    }
}
