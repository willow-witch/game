<?php

namespace App\Http\Controllers;
use App\Services\CriteriaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationController extends Controller
{
    protected CriteriaService $criteriaService;

    public function __construct(CriteriaService $criteriaService)
    {
        $this->criteriaService = $criteriaService;
    }

//    public function evaluate(Request $request)  оригинал от Леры
//    {
//
//        $group_id = $request->input('group_id');
//        unset($request['group_id'], $request['_token']);
//
//        foreach ($request->all() as $key => $item)
//        {
//            $criteriaId = $this->criteriaService->getCriteriaIdByName($key);
//
//            DB::table('stage1_teachers_evaluation')->insert(
//                [
//                    'teacher_id' => session('user_id'),
//                    'group_id' => $group_id,
//                    'criteria_id'=> $criteriaId,
//                    'score' => $item,
//                    'evaluation_date'=>date('Y-m-d H:i:s'),
//                    'active'=>1
//                ]
//            );
//        }
//
//        return redirect(\route('teacher.profile'));
//    }

    public function evaluate(Request $request, $stage_id) // $stage_id
    {

        switch ($stage_id) {
            case 1:
                $stage_id = $request->input('stage_id');
                unset($request['stage_id'], $request['_token']);

                $group_id = $request->input('group_id');
                unset($request['group_id'], $request['_token']);

                foreach ($request->all() as $key => $item) {
                    $criteriaId = $this->criteriaService->getCriteriaIdByName($key);

                    DB::table('stage1_teachers_evaluation')->insert(
                        [
                            'teacher_id' => session('user_id'),
                            'group_id' => $group_id,
                            'criteria_id' => $criteriaId,
                            'score' => $item,
                            'evaluation_date' => date('Y-m-d H:i:s'),
                            'active' => 1
                        ]
                    );
                }

                return redirect(\route('teacher.profile'));

            case 2:
                $group_id = $request->input('group_id');
                unset($request['group_id'], $request['_token']);

                //var_dump($request);

                //echo ('<pre>');
                foreach ($request->all() as $key => $item) {

                    //echo ($key);

                    //var_dump($request->all());
                    //echo (' ');
                    DB::table('stage2_teachers_evaluation')->insert(
                        [
                            'answer_id' => $key,
                            'teacher_id' => session('user_id'),
                            'group_id' => $group_id,
                            'score' => $item,
                            'evaluation_date' => date('Y-m-d H:i:s'),
                            'active' => 1
                        ]
                    );
                }

                return redirect(\route('teacher.profile'));

        }
    }
}
