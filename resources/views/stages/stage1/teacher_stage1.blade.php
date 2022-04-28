@extends('stages.stage')

@include('stages.stage1.teacher_stage1_answers')
@include('stages.stage1.teacher_stage1_evaluation')

<?php
$teams_results = [
    [
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
                "criteria" => "criteria1",
                "type" => "free",
                "max_point" => "10",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "type" => "radio",
                "max_point" => "10",
                "score" => "score2"
            ],
            [
                "criteria" => "criteria2",
                "type" => "range",
                "max_point" => "100",
                "score" => "score2"
            ]
        ]
    ],
    [
        "team_name" => "team2",
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
                "criteria" => "criteria1",
                "type" => "free",
                "max_point" => "10",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "type" => "radio",
                "max_point" => "10",
                "score" => "score2"
            ],
            [
                "criteria" => "criteria2",
                "type" => "range",
                "max_point" => "100",
                "score" => "score2"
            ]
        ]
    ],
    [
        "team_name" => "team3",
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
                "criteria" => "criteria1",
                "type" => "free",
                "max_point" => "10",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "type" => "radio",
                "max_point" => "10",
                "score" => "score2"
            ],
            [
                "criteria" => "criteria2",
                "type" => "range",
                "max_point" => "100",
                "score" => "score2"
            ]
        ]
    ],
];

?>

@section('stage_content')

    @foreach($teams_results as $result)

        @yield('teacher_stage1_answers', ['team_name' => $result["team_name"],'answers' => $result["result"]])

        @yield('teacher_stage1_evaluation', ['team_name' => $result["team_name"],'criteria' => $result["criteria"]])

    @endforeach

@endsection
