@extends('stages.stage')

@include('stages.stage2.teacher_stage2_answers', ['team_name' => $team_name,
    'image' => $image,'answers' => $answers])
@include('stages.stage2.teacher_stage2_evaluation', ['team_name' => $team_name,
    'image' => $image,'answers' => $answers, 'score' => $score])

@section('stage_content')

    @if(empty($answers))
        <div class="stage-background">
            Команда {{$team_name}} еще не ответила на вопросы модуля таргетинга
        </div>
    @else

        @if (empty($score))
            @yield('teacher_stage2_answers')
        @else
            @yield('teacher_stage2_evaluation')
        @endif
    @endif

@endsection
