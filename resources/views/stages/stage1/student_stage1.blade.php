@extends('stages.stage')

@include('stages.stage1.student_stage1_questions', ['questions' => $questions])
@include('stages.stage1.student_stage1_criteria', ['criteria' => $criteria])

@section('stage_content')

    <div class="stage-background">
        @yield('student_stage1_questions')
    </div>

    <div class="stage-criteria">
        @yield('student_stage1_criteria')
    </div>

@endsection




