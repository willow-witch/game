@extends('stages.stage')

@include('stages.stage2.teacher_stage2_answers', ['team_name' => $team_name,'answers' => $answers])

@section('stage_content')

    @yield('teacher_stage2_answers')

@endsection
