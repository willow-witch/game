<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class QuestionService
{
    public function getQuestionsForStudent(): array
    {
        $questions = DB::table('stage1_questions')
            ->select(DB::raw(
                        'stage1_questions.question,
                        question_type.type,
                        stage1_questions.topic,
                        group_concat(stage1_answers.answer) as "answers"'))
            ->leftJoin('stage1_answers_questions', 'id', 'stage1_answers_questions.question_id')
            ->leftJoin('stage1_answers', 'answer_id', 'stage1_answers.id')
            ->leftJoin('question_type', 'stage1_questions.type', 'question_type.id')
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
    }
}
