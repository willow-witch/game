@extends('main_page.main')

@section('profile')

    <div class="user-profile-image">
        <img src="/img/profilepics/king.png"/>
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

    <div class="user-wrapper-title">
        Игры
    </div>

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
    <div class="user-games-btn">
        <a href="create_game">Создать игру</a>
    </div>
@stop
