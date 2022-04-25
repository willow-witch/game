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
        "Таргетинг",
        "Позиционирование",
        "Brand Equity",
        "Brand Communication",
        "Brand Loyalty"
    ];
    $stages_count = count($stages);

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
        <img src="public/img/profilepics/king.png"/>
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
        <div class="user-games-games-name">
            {{$game["game_name"]}}
        </div>

        <div class="user-games-games-progress-list" href="javascript:void(0);" tabindex="1">
            {{$game["status"]}}
        </div>


        <div class="user-stages-wrapper">
            <div class="user-games-games-progress-list" href="javascript:void(0);" tabindex="1">
                stages
            </div>

            <ul class="user-games-games-progress">

                @for($i=1; $i<=$stages_count; $i++)
                <li class="user-games-games-progress-stage">
                    <a href="stage/{{$i}}">
                        stage {{$i}} - {{$stages[$i-1]}}
                    </a>
                </li>
                @endfor


            </ul>
        </div>

    </div>
    @endforeach

@endsection
@section('create')
    <a href="create_game">create game</a>
@stop
