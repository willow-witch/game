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
        "key" =>"Роль",
        "value" => "Администратор"
    ],
    [
        "key" => "e-mail",
        "value" => "abc@gmsil.com"
    ]
];
?>

@section('profile')

    <div class="user-profile-image">
        <img src="/img/profilepics/queen.png">
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
        Редактировать
    </div>

    @foreach($stages as $stage)
        <div class="admin-edit-stage-wrapper">
            <div class="admin-edit-stage-wrapper-btn">
                {{$stage}} - Вопросы
            </div>
            <div class="admin-edit-stage-wrapper-btn">
                {{$stage}} - Критерии
            </div>
        </div>
    @endforeach

@endsection
@section('create')
    <div class="user-games-btn">
        <a href="create_user">Создать пользователя</a>
    </div>
@stop
