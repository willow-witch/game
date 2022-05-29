@extends('layout_main')

@include('create_game.teams', ['students' => $students])

@section('content')

    @for($i=1; $i<=$teams_amount; $i++)
        @yield('teams')
    @endfor

    <input type="submit" class="submit-button" value="Создать команды" style="margin-right: 60px">

@endsection
