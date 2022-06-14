<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Services\QuestionService;

class TeamService
{
    public function getTeamName($team) : string
    {
        return DB::table('groups')
                 ->select(DB::raw(
                     'groups.name as "name"'))
                 ->where('groups.id', '=', $team)
                 ->value("name");
    }

    public function getAnswersForStage(int $stage, int $team = 0, $game = 0) : array
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
                    ->where('stage1_answers_students.game_id', '=', $game)
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

    public function getImageStage1($team, $game)
    {
        $imageQuestionId = app(QuestionService::class)->getImageQuestionStage1();

        return DB::table('stage1_answers_students')
                    ->select(DB::raw(
                    'stage1_answers.answer as "path"'))
                    ->leftJoin('stage1_answers', 'stage1_answers_students.answer_id', 'stage1_answers.id')
                    ->where('stage1_answers_students.group_id', '=', $team)
                    ->where('stage1_answers_students.game_id', '=', $game)
                    ->where('stage1_answers_students.question_id', '=', $imageQuestionId)
                    ->value("path");
    }
}
