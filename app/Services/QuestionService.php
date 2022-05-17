<?php

namespace App\Services;

class QuestionService
{
    public function getQuestionsForStudent(): array
    {
        //TODO: отсортировать по темам
        return [
            [
                "question" => "City",
                "type" => "free",
                "answers" => "City"
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
                    "Introvert",
                    "Extravert"
                ]
            ]
        ];
    }
}
