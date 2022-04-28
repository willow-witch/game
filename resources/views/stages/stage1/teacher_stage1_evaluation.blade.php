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

@section('teacher_stage1_evaluation')

    @foreach($teams_results as $result)

        <div class="stage-criteria">
        <div class="point-name">
            {{$result["team_name"]}}
        </div>

            @foreach($result["criteria"] as $criteria)
                <h1>
                    {{$criteria["criteria"]}}
                </h1>
                <h1>
                    {{$criteria["score"]}}
                </h1>
            @endforeach
        </div>

    @endforeach

@endsection
