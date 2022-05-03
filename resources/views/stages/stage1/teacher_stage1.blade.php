@extends('stages.stage')

@include('stages.stage1.teacher_stage1_answers', ['team_name' => $team_name,'answers' => $answers])
@include('stages.stage1.teacher_stage1_evaluation', ['team_name' => $team_name,'criteria' => $criteria])

@section('stage_content')

        @yield('teacher_stage1_answers')

        @yield('teacher_stage1_evaluation')

@endsection
