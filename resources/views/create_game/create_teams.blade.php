@extends('layout_main')

@section('content')

    <form method="post" action="create">
        @csrf

        <input hidden name="start_date" value="{{$start_date}}">
        <input hidden name="end_date" value="{{$end_date}}">
        <input hidden name="teams_amount" value="{{$teams_amount}}">
        <input hidden name="game_id" value="{{$game_id}}">

        @for($i=1; $i<=$teams_amount; $i++)
            <div class="stage-background">

                <div class="creation-stage-wrapper">
                    <div class="creation-stage-name">
                        Основное
                    </div>

                    <div class="creation-stage-horizontal">
                        <input type="text" class="basic-parameter" placeholder="Название команды" name="team_name{{$i}}">

                    </div>

                    <div class="creation-stage-name-subtitle">
                        Студенты
                    </div>

                    <div class="question-test-answers" >
                        @foreach($students as $student)
                            <label class="question-test-answer">
                                <input type="checkbox" name="students{{$i}}[]" value="{{$student}}">
                                <span>
                                {{$student}}
                            </span>
                            </label>
                        @endforeach
                    </div>

                </div>

            </div>
        @endfor

        <input type="submit" class="submit-button" value="Создать команды" style="margin-right: 60px">
    </form>


@endsection
