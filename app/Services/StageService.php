<?php

namespace App\Services;

class StageService
{
    protected array $stages = [
        "Таргетинг",
        "Позиционирование",
        "Brand Equity",
        "Brand Communication",
        "Brand Loyalty"
    ];

    public function getAllStages(): array
    {
        return $this->stages;
    }

    public function getStagesCount(): int
    {
        return count($this->stages);
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
