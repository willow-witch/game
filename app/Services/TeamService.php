<?php

namespace App\Services;

class TeamService
{
    public function getTeamName() : string
    {
        return "team1";
    }

    public function getAnswersForStage(int $stage) : array
    {
        return [
            [
                "question" => "City",
                "type" => "free",
                "answers" => [
                    "City"
                ]
            ],
            [
                "question" => "Hobbies",
                "type" => "test-multiple-options",
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
                "question" => "Personality",
                "type" => "test-only-option",
                "answers" => [
                    "Introvert"
                ]
            ],
            [
                "question" => "Personality",
                "type" => "test-only-option",
                "answers" => [
                    "Introvert"
                ]
            ],
            [
                "question" => "Personality",
                "type" => "test-only-option",
                "answers" => [
                    "Introvert"
                ]
            ]
        ];
    }
}
