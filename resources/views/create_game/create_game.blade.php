@extends('layout_main')

@include('create_game.basics')
@include('create_game.judges', ['stages' => $stages, 'stages_count' => $stages_count, 'fields' => $fields])

@section('content')

    <div class="wrapper">
        <form method="post" action="create_teams">
            @csrf

            <div class="stage-background">
                @yield('basics')
            </div>

            <div class="stage-background">
                @yield('judges')
            </div>

            <input type="submit" class="submit-button" value="Создать команды" style="margin-right: 60px">
        </form>
    </div>

@endsection


