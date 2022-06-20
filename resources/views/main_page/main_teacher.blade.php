@extends('main_page.main')

@section('profile')

    <div class="user-profile-image">
        <img src="{{$user_photo}}"/>
    </div>

    @foreach($user_information as $key => $value)
        <div class="user-profile-profile">
            <div>
                {{$key}}
            </div>
            <div>
                {{$value}}
            </div>
        </div>
    @endforeach
    <div class="user-profile-btn"> Edit</div>
@endsection
@section('games')

    <div class="user-wrapper-title">
        Игры
    </div>

    @foreach($content as $game)
    <div class="user-games-games">
        <div class="teacher-games-games-name">
            {{$game["game_name"]}}
        </div>

        <?php
        $stages_count = count($game["stages"]);
        ?>

        @for($i=0; $i < $stages_count; $i++)
            <div class="teacher-stages-wrapper">
                <div class="teacher-games-games-progress-list" href="javascript:void(0);" tabindex="1">
                     {{$game["stages"][$i]["stage_name"]}}
                </div>

                <?php
                $teams_count = count($game["stages"][$i]["teams"]);
                // dd($game["stages"][$i]["teams"]);
                ?>

                <ul class="teacher-games-games-progress">

                   @for($j=0; $j < $teams_count; $j++)
                    <li class="teacher-games-games-progress-stage-team">
                       <a href="stage/{{$i+1}}/team/{{$game["stages"][$i]["teams"][$j]["group_id"]}}">
                           {{$game["stages"][$i]["teams"][$j]["team_name"]}}
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
