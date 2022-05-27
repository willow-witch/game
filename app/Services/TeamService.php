<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class TeamService
{
    public function getTeamName() : string
    {
        return "team1";
    }

    public function getAnswersForStage(int $stage, int $team = 0) : array
    {
        switch ($stage){
            case 1:
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
            case 2:

                if ($team == null){
                    $team=0;
                }

                $answers = DB::table('stage2_answers_students')
                    ->select(DB::raw(
                        'stage2_answers_students.answer,
                        stage2_questions.question
                        '))
                    ->leftJoin('stage2_questions', 'stage2_answers_students.question_id', 'stage2_questions.id')
                    ->where('stage2_answers_students.group_id', '=', $team)
                    ->orderBy('stage2_questions.id')
                    ->get();

                $answers = json_decode(json_encode($answers, true), true);

                $result = $answers;

                return $result;

        }

    }
}
