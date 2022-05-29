<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class EvaluationController extends Controller
{
    public function evaluate(Request $request)
    {
        // dd($request->all());
        return redirect(\route('teacher.profile'));
    }
}
