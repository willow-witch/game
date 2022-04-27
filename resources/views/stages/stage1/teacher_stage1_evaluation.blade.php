<?php

$teams_results = [
    [
        "team_name" => "team1",
        "result" => [
            [
                "question" => "question1",
                "answers" => "answers1"
            ],
            [

                "question" => "question2",
                "answers" => "answers2"

            ],
            [
                "question" => "question3",
                "answers" => "answers3"
            ]
        ],
        "criteria" => [
            [
                "criteria" => "criteria1",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "score" => "score2"
            ]
        ]
    ],
    [
        "team_name" => "team2",
        "result" => [
            [
                "question" => "question1",
                "answers" => "answers1"
            ],
            [

                "question" => "question2",
                "answers" => "answers2"

            ],
            [
                "question" => "question3",
                "answers" => "answers3"
            ]
        ],
        "criteria" => [
            [
                "criteria" => "criteria1",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "score" => "score2"
            ]
        ]
    ],
    [
        "team_name" => "team3",
        "result" => [
            [
                "question" => "question1",
                "answers" => "answers1"
            ],
            [

                "question" => "question2",
                "answers" => "answers2"

            ],
            [
                "question" => "question3",
                "answers" => "answers3"
            ]
        ],
        "criteria" => [
            [
                "criteria" => "criteria1",
                "score" => "score1"
            ],
            [
                "criteria" => "criteria2",
                "score" => "score2"
            ]
        ]
    ],
];

?>

@section('teacher_stage1_evaluation')

    @foreach($teams_results as $result)

            @foreach($result["criteria"] as $criteria)
                <h1>
                    {{$criteria["criteria"]}}
                </h1>
                <h1>
                    {{$criteria["score"]}}
                </h1>
            @endforeach

    @endforeach
@endsection
