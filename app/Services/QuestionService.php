<?php

namespace App\Services;

class QuestionService
{
    public function getQuestionsForStudent(): array
    {
        return [
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
                "question" => "Personality",
                "type" => "scale",
                "answers" => [
                    "left" => "Introvert",
                    "right" => "Extravert"
                ]
            ]
        ];
    }
}
