@extends('stages.stage')

<?php
$teams_results = [
    "team_name" => "team1",
    "result" => [
        [
            "question" => "City",
            "type" => "free",
            "answers" => "City"
        ],
        [
            "question" => "Hobbies",
            "type" => "test",
            "answers" => [
                "Skating",
                "Swimming",
                "Sketching",
                "Writing",
                "Gaming",
                "Swimming",
                "Sketching",
                "Writing",
                "Gaming"
            ]
        ],
        [
            "question" => "City",
            "type" => "free",
            "answers" => "City"
        ],
        [
            "question" => "Hobbies",
            "type" => "test",
            "answers" => [
                "Skating",
                "Swimming",
                "Sketching",
                "Writing",
                "Gaming"
            ]
        ]
    ],
    "criteria" => [
        [
            "criteria_name" => "criteria1",
            "type" => "free",
            "max_point" => "10",
            "score" => "score1"
        ],
        [
            "criteria_name" => "criteria2",
            "type" => "radio",
            "max_point" => "10",
            "score" => "score2"
        ],
        [
            "criteria_name" => "criteria2",
            "type" => "range",
            "max_point" => "100",
            "score" => "score2"
        ]
    ]
];
?>

@include('stages.stage1.teacher_stage1_answers', ['team_name' => $teams_results["team_name"],'answers' => $teams_results["result"]])
@include('stages.stage1.teacher_stage1_evaluation', ['team_name' => $teams_results["team_name"],'criteria' => $teams_results["criteria"]])



@section('stage_content')

        @yield('teacher_stage1_answers')

        @yield('teacher_stage1_evaluation')


@endsection
