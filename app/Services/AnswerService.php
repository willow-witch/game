<?php

namespace App\Services;

use App\Services\QuestionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerService
{
    public function handleImage(Request $request) : string
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('public/img/stage1pics', $name);
            $path = '/storage' . substr($path, 6);
        }
        else {
            $path = "/img/stage1pics/user.png";
        }

        return $path;
    }

    public function addAnswerStage1($answer) : int
    {
        return DB::table('stage1_answers')->insertGetId(
            [
                'answer' => $answer,
                'active' => 1
            ]
        );
    }

    public function getAnswerIdByName($name)
    {
        return DB::table('stage1_answers')
                 ->select(DB::raw(
                     'stage1_answers.id as "answer_id"'))
                 ->where('answer', '=', $name)
                 ->value("answer_id");
    }

    public function addTeamAnswer($questionId, $answerId, $gameId, $groupId)
    {
        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => $questionId,
                'answer_id'=> $answerId,
                'game_id' => $gameId,
                'group_id' => $groupId,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );
    }

    public function handleTeamAnswers(Request $request, $gameId, $groupId)
    {
        foreach ($request->all() as $key => $items)
        {
            $questionId = app(QuestionService::class)->getQuestionIdByName($key);
            foreach ($items as $item)
            {
                if($this->getAnswerIdByName($item))
                {
                    $answerId = $this->getAnswerIdByName($item);
                }
                else
                {
                    $answerId = $this->addAnswerStage1($item);
                }

                $this->addTeamAnswer($questionId, $answerId, $gameId, $groupId);
            }
        }
    }

    public function addImageStage1($image, $gameId, $groupId)
    {
        $questionId = app(QuestionService::class)->getImageQuestionStage1();

        $answerId = $this->addAnswerStage1($image);

        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => $questionId,
                'answer_id'=> $answerId,
                'game_id' => $gameId,
                'group_id' => $groupId,
                'answer_date'=> date('Y-m-d H:i:s'),
                'active'=> 1
            ]
        );
    }
}
