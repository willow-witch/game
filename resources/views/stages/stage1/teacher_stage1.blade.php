@extends('stages.stage')

@include('stages.stage1.teacher_stage1_answers', ['team_name' => $team_name,
    'answers' => $answers, 'image' => $image])
@include('stages.stage1.teacher_stage1_evaluation', ['team_name' => $team_name,
    'criteria' => $criteria])

@section('stage_content')

    @if(!empty($answers))
        @yield('teacher_stage1_answers')
    @else
        <div class="stage-background">
            Команда {{$team_name}} еще не ответила на вопросы модуля таргетинга
        </div>
    @endif

        @yield('teacher_stage1_evaluation')

@endsection
