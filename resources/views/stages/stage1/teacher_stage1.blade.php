@extends('stages.stage')

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

@section('stage_content')

    @foreach($teams_results as $result)
        <div class="stage-background">
            {{$result["team_name"]}}

            @foreach($result["result"] as $question)
                <h1>
                    {{$question["question"]}}
                </h1>
                <h1>
                    {{$question["answers"]}}
                </h1>
            @endforeach
        </div>

        <div class="stage-criteria">
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
