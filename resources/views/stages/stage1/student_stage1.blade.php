@extends('stages.stage')

@if(!empty($questions))
    @include('stages.stage1.student_stage1_questions',
        [
            'group_id'=> $group_id,
            'game_id'=> $game_id
        ]
    )
@else
    @include('stages.stage1.teacher_stage1_answers')
@endif

@include('stages.stage1.student_stage1_criteria', ['criteria' => $criteria])

@section('stage_content')

    @if(!empty($questions))
        <div class="stage-background">
            @yield('student_stage1_questions')
        </div>
    @else
        @yield('teacher_stage1_answers')
    @endif

    @if(!empty($criteria["criteria"]))
    <div class="stage-criteria">
        @yield('student_stage1_criteria')
    </div>
    @endif

@endsection




