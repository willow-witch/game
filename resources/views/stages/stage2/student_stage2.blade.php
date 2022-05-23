@extends('stages.stage')

@include('stages.stage2.student_stage2_questions', ['questions' => $questions])
@include('stages.stage2.student_stage2_criteria', ['criteria' => $criteria])

@section('stage_content')

    <div class="stage-background">
        @yield('student_stage2_questions')
    </div>

    <div class="stage-criteria">
        @yield('student_stage2_criteria')
    </div>

@endsection
