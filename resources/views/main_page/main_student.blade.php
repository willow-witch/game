@extends('main_page.main')

<?php
    $user_information = [
        [
            "key" => "Фамилия",
            "value" => "Иванова"
        ],
        [
            "key" =>  "Имя",
            "value" => "Валерия"
        ],
        [
            "key" => "Отчество",
            "value" => "Андреевна"
        ],
        [
            "key" =>"Курс, Специальность",
            "value" => "4 курс, МОиАИС"
        ],
        [
            "key" => "e-mail",
            "value" => "abc@gmsil.com"
        ]
    ];
?>

@section('profile')

    <div class="user-profile-image">
        <img src="/img/profilepics/woman.png">
    </div>

    @foreach($user_information as $item)
        <div class="user-profile-profile">
            <div>
                {{$item["key"]}}
            </div>
            <div>
                {{$item["value"]}}
            </div>
        </div>
    @endforeach
    <div class="user-profile-btn"> Statistics</div>
    <div class="user-profile-btn"> Edit</div>
@endsection
@section('games')

    <?php
    $stages = [
        "Таргетинг",
        "Позиционирование",
        "Brand Equity",
        "Brand Communication",
        "Brand Loyalty"
    ];
    $stages_count = count($stages);

    $games = [
        [
            "game_name" => "game1",
            "team_name" => "team1"
        ],
        [
            "game_name" => "game3",
            "team_name" => "team5"
        ],
        [
            "game_name" => "game7",
            "team_name" => "team2"
        ]
    ]
    ?>

    <div class="user-wrapper-title">
        Игры
    </div>

    @foreach($games as $game)

    <div class="user-games-games">
        <div class="user-games-games-name">
            {{$game["game_name"]}}
        </div>

        <div class="user-stages-wrapper">
        <div class="user-games-games-progress-list" href="javascript:void(0);" tabindex="1">
            progress
        </div>

            <ul class="user-games-games-progress">

                @for($i=1; $i<=$stages_count; $i++)

                <li class="user-games-games-progress-stage">
                    <a href="stage/{{$i}}">
                        {{$stages[$i-1]}}
                    </a>
                </li>
                @endfor

            </ul>
        </div>

        <div class="user-games-games-team">
            {{$game["team_name"]}}
        </div>

    </div>
    @endforeach

@endsection
@section('create')
    <div class="user-games-btn">
        <a href="join_game">Присоединиться к игре</a>
    </div>
@stop
