@extends('main')

<?php
    $games = [
        [
            "game_name" => "game1",
            "status" => "не завершено"
        ],
        [
            "game_name" => "game2",
            "status" => "не завершено"
        ],
        [
            "game_name" => "game3",
            "status" => "не завершено"
        ]
    ];

    $stages = [
        [
            "stage_name" => "Таргетинг",
            "teams" => [
                "team1",
                "team2",
                "team3"
            ]
        ],
        [
            "stage_name" => "Позиционирование",
            "teams" => [
                "team1",
                "team2",
                "team3"
            ]
        ],
        [
            "stage_name" => "Brand Equity",
            "teams" => [
                "team1",
                "team2",
                "team3"
            ]
        ],
        [
            "stage_name" => "Brand Communication",
            "teams" => [
                "team1",
                "team2",
                "team3"
            ]
        ],
        [
            "stage_name" => "Brand Loyalty",
            "teams" => [
                "team1",
                "team2",
                "team3"
            ]
        ]
    ];

    $user_information = [
        [
            "key" => "Фамилия",
            "value" => "Зонин"
        ],
        [
            "key" =>  "Имя",
            "value" => "Никита"
        ],
        [
            "key" => "Отчество",
            "value" => "Андреевич"
        ],
        [
            "key" =>"Должность",
            "value" => "Преподаватель"
        ],
        [
            "key" => "e-mail",
            "value" => "abc@gmsil.com"
        ]
    ];
?>

@section('profile')

    <div class="user-profile-image">
        <img src="/img/profilepics/king.png"/>
    </div>

    @foreach($user_information as $item)
    <div class="user-profile-profile">
        {{$item["key"]}} - {{$item["value"]}}
    </div>
    @endforeach
@endsection
@section('games')

    @foreach($games as $game)
    <div class="user-games-games">
        <div class="teacher-games-games-name">
            {{$game["game_name"]}}
        </div>

        <?php
        $stages_count = count($stages);
        ?>

        @for($i=0; $i < $stages_count; $i++)
            <div class="teacher-stages-wrapper">
                <div class="teacher-games-games-progress-list" href="javascript:void(0);" tabindex="1">
                     {{$stages[$i]["stage_name"]}}
                </div>

                <?php
                $teams_count = count($stages[$i]["teams"]);
                ?>

                <ul class="teacher-games-games-progress">

                   @for($j=0; $j < $teams_count; $j++)
                    <li class="teacher-games-games-progress-stage-team">
                       <a href="stage/{{$i+1}}/team/{{$j+1}}">
                           {{$stages[$i]["teams"][$j]}}
                       </a>
                    </li>
                   @endfor

                </ul>
            </div>
        @endfor

    </div>

    @endforeach

@endsection
@section('create')
    <a href="create_game">create game</a>
@stop
