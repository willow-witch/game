<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            $path = substr($path, 6);
        }
        else {
            $path = "/img/stage1pics/user.png";
        }

        return $path;
    }

    public function addImageStage1($image, $gameId, $groupId)
    {
        $questionId = DB::table('stage1_questions')
          ->select(DB::raw(
              'stage1_questions.id as "question_id"'))
          ->where('question', '=', "Изображение")
          ->value("question_id");

        $answerId = DB::table('stage1_answers')->insertGetId(
            [
                'answer' => $image,
                'active' => 1
            ]
        );

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
