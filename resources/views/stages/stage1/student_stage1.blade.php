@extends('stages.stage')

<?php
    $questions = [
        [
        "question" => "question1",
        "answers" => "answers1"
        ],
        [
        "question" => "question2",
        "answers" => "answers2"
        ],
        [
        "question" => "question3",
        "answers" => "answers3"
        ]
    ];
?>

@section('student_stage1_questions')

    <div class="stage-name">
        Портрет покупателя
    </div>

    <div class="questions-wrapper">
        <div class="left-column">
            <div class="buyer-pic">
                <img src="/img/stage1pics/user.png">
            </div>

            <div class="add-pic">
                Добавить изображение
            </div>

            <input type="text" class="characteristics" placeholder="Имя" required>
            <input type="text" class="characteristics" placeholder="Пол" required>
            <input type="text" class="characteristics" placeholder="Возраст" required>

        </div>

        <div class="questions">
            @foreach($questions as $question)
                <h1>
                    {{$question["question"]}}
                </h1>
                <h1>
                    {{$question["answers"]}}
                </h1>
            @endforeach
        </div>


    </div>


@endsection

@include('stages.stage1.student_stage1_criteria')
