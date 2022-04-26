@extends('stages.stage')

<?php

$criteria = [
    [
        "criteria" => "criteria1",
        "score" => "score1"
    ],
    [
        "criteria" => "criteria2",
        "score" => "score2"
    ],
    [
        "criteria" => "criteria3",
        "score" => "score3"
    ]
];

?>

@section('stage_content')

    <div class="stage-background">
        @yield('student_stage1_questions')
    </div>

    <div class="stage-criteria">
        @foreach($criteria as $score)
            <h1>
                {{$score["criteria"]}}
            </h1>
            <h1>
                {{$score["score"]}}
            </h1>
        @endforeach
    </div>

@endsection


