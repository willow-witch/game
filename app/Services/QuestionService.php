<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class QuestionService
{
    public function getQuestionsForStudentStage1(): array
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
            ->where('stage1_questions.question', '!=', "Изображение")
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

    public function getQuestionsForStudentStage2(): array
    {
        $questions = DB::table('stage2_questions')
            ->select(DB::raw(
                'stage2_questions.question,
                        stage2_questions.question_help,
                        question_type.type,
                        stage2_questions.id'))
            ->leftJoin('question_type', 'stage2_questions.type', 'question_type.id')
            ->where('stage2_questions.question', '!=', 'Image')
            ->orderBy('stage2_questions.id')
            ->orderBy('question_type.type')
            ->get();

            $questions = json_decode(json_encode($questions, true), true);

            // dd(array_slice($questions, 0, -1));

        return $questions;
    }

    public function getImageQuestionStage1()
    {
        return DB::table('stage1_questions')
                 ->select(DB::raw(
                     'stage1_questions.id as "question_id"'))
                 ->where('question', '=', "Изображение")
                 ->value("question_id");
    }

    public function getImageQuestionStage2()
    {
        return DB::table('stage2_questions')
                 ->select(DB::raw(
                     'stage2_questions.id as "question_id"'))
                 ->where('question', '=', "Image")
                 ->value("question_id");
    }

    public function getQuestionIdByName($name)
    {
        return DB::table('stage1_questions')
                 ->select(DB::raw(
                     'stage1_questions.id as "question_id"'))
                 ->where('question', 'like', $name)
                 ->value("question_id");
    }
}
