@extends('main_page.main')

@section('profile')

    <div class="user-profile-image">
        <img src="{{$user_photo}}">
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
    <div class="user-profile-btn"> Statistics</div>
    <div class="user-profile-btn"> Edit</div>
@endsection
@section('games')

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
                    <form method="post" action="stage/game">
                        @csrf
                        <input hidden name="game_id" value="{{$game['game_id']}}">
                        <input hidden name="group_id" value="{{$game['group_id']}}">
                        <input hidden name="stage" value="{{$i}}">
                        <input type="submit" class="sbt-btn" value="{{$stages[$i-1]}}">
                    </form>
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
