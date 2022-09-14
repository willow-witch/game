<?php

namespace App\Services;

use App\Services\QuestionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\TeacherService;

class AnswerService
{
    public function handleImage(Request $request, int $stageId) : string
    {
        switch ($stageId){
            case 1:
                $pathString = 'public/img/stage1pics';
                break;
            case 2:
                $pathString = 'public/img/stage2pics';
                break;
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs($pathString, $name);
            $path = '/storage' . substr($path, 6);
        }
        else {
            $path = "/img/stage1pics/user.png";
        }

        // dd($path);
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

    public function handleTeamAnswersStage1(Request $request, $gameId, $groupId)
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

    public function handleTeamAnswersStage2($request, $gameId, $groupId): void
    {
        foreach ($request as $key => $item) {
            //var_dump($key);
            DB::table('stage2_answers_students')->insert(
                [
                    'question_id' => $key,
                    'answer'=> $item,
                    'game_id' => $gameId,
                    'group_id' => $groupId,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ]
            );
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

    public function addImageStage2($image, $gameId, $groupId)
    {
        $questionId = app(QuestionService::class)->getImageQuestionStage2();

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => $questionId,
                'answer'=> $image,
                'game_id' => $gameId,
                'group_id' => $groupId,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );
    }

    public function getTeachersEvaluationStage2($gameId, $teamId){
        //$teacherId = session('user_id');
        //$teacherName = app(UserService::class)->getUserName($teacherId, 3);

        $result = DB::table('stage2_teachers_evaluation')
            ->select(DB::raw(
                'stage2_teachers_evaluation.score,
                stage2_teachers_evaluation.answer_id'))
            ->where ('stage2_teachers_evaluation.group_id', '=', $teamId)
            ->get();

        $result = json_decode(json_encode($result, true), true);

        return $result;

    }

}
