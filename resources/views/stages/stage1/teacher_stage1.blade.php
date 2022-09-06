@extends('stages.stage')

@include('stages.stage1.teacher_stage1_answers', ['team_name' => $team_name,
    'answers' => $answers, 'image' => $image])

@include('stages.stage1.teacher_stage1_evaluation', ['team_name' => $team_name,
    'criteria' => $criteria])

@include('stages.stage1.student_stage1_criteria', ['criteria' => $evaluation])

@section('stage_content')

    @if(empty($answers))
        <div class="stage-background">
            Команда {{$team_name}} еще не ответила на вопросы модуля таргетинга
        </div>
    @else
       @yield('teacher_stage1_answers')

       @if(empty($evaluation['criteria']))
           @yield('teacher_stage1_evaluation')
       @else
           <div class="stage-criteria">
               @yield('student_stage1_criteria')
           </div>
       @endif
    @endif

@endsection
