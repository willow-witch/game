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

    public function evaluate(Request $request)
    {
        $group_id = $request->input('group_id');
        unset($request['group_id'], $request['_token']);

        foreach ($request->all() as $key => $item)
        {
            $criteriaId = $this->criteriaService->getCriteriaIdByName($key);

            DB::table('stage1_teachers_evaluation')->insert(
                [
                    'teacher_id' => session('user_id'),
                    'group_id' => $group_id,
                    'criteria_id'=> $criteriaId,
                    'score' => $item,
                    'evaluation_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ]
            );
        }

        return redirect(\route('teacher.profile'));
    }
}
