@extends('stages.stage')

@include('stages.stage2.student_stage2_questions', ['questions' => $questions])
@include('stages.stage2.teacher_stage2_evaluation', ['team_name' => $team_name,
    'image' => $image,'answers' => $answers, 'score' => $score])

@section('stage_content')
{{--    @dd($answers)--}}
    @if (!empty($score))
        @yield('teacher_stage2_evaluation')
    @else

    <div class="stage-background">
        @yield('student_stage2_questions')
    </div>
    @endif

@endsection
