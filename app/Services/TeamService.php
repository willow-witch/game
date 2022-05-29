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

                if ($team == null){
                    $team=0;
                }



                $questions = DB::table('stage1_answers_students')
                    ->select(DB::raw(
                        'stage1_questions.question,
                        question_type.type,
                        stage1_questions.topic,
                        group_concat(stage1_answers.answer) as "answers"'))
                    ->leftJoin('stage1_questions', 'stage1_answers_students.question_id', 'stage1_questions.id')
                    ->leftJoin('stage1_answers', 'stage1_answers_students.answer_id', 'stage1_answers.id')
                    ->leftJoin('question_type', 'stage1_questions.type', 'question_type.id')
                    ->where('stage1_answers_students.group_id', '=', $team)
                    ->groupBy('stage1_questions.id', 'stage1_questions.topic', 'question_type.type')
                    ->orderBy('stage1_questions.topic')
                    ->orderBy('question_type.type')
                    ->get();


                $result = [];

                $questions = json_decode(json_encode($questions, true), true);

                foreach ($questions as $key => $value)
                {
                    $value['answers'] = explode(',', $value['answers']);
                    $result[] = $value;

                }
                return $result;

//                return [
//                    [
//                        "question" => "City",
//                        "type" => "free",
//                        "answers" => [
//                            "City"
//                        ]
//                    ],
//                    [
//                        "question" => "Hobbies",
//                        "type" => "test-multiple-options",
//                        "answers" => [
//                            "Skating",
//                            "Swimming",
//                            "Sketching",
//                            "Writing",
//                            "Gaming",
//                            "Swimming",
//                            "Sketching",
//                            "Writing",
//                            "Gaming"
//                        ]
//                    ],
//                    [
//                        "question" => "Personality",
//                        "type" => "test-only-option",
//                        "answers" => [
//                            "Introvert"
//                        ]
//                    ],
//                    [
//                        "question" => "Personality",
//                        "type" => "test-only-option",
//                        "answers" => [
//                            "Introvert"
//                        ]
//                    ],
//                    [
//                        "question" => "Personality",
//                        "type" => "test-only-option",
//                        "answers" => [
//                            "Introvert"
//                        ]
//                    ]
//                ];
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
