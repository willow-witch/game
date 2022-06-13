<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\QuestionService;

class AnswerService
{
    public function handleImage(Request $request) : string
    {
        // $this->validate($request, [
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

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
