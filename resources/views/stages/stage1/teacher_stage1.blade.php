@extends('stages.stage')

@include('stages.stage1.teacher_stage1_answers')
@include('stages.stage1.teacher_stage1_evaluation')

@section('stage_content')


        @yield('teacher_stage1_answers')
    </div>

    <div class="stage-criteria">
        @yield('teacher_stage1_evaluation')
    </div>

@endsection
