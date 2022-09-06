@extends('stages.stage')

@include('stages.stage2.teacher_stage2_answers', ['team_name' => $team_name,
    'image' => $image,'answers' => $answers])

@section('stage_content')

    @if(!empty($answers))
        @yield('teacher_stage2_answers')
    @else
        <div class="stage-background">
            Команда {{$team_name}} еще не ответила на вопросы модуля таргетинга
        </div>
    @endif

@endsection
