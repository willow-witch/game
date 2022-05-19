
<?php

    $teachers = [
        "teacher 1",
        "teacher 1",
        "teacher 1",
        "teacher 1",
        "teacher 1"
    ];

    ?>

@section('judges')

    <div class="creation-stage-wrapper">
        <div class="creation-stage-name">
            Судьи
        </div>

        @foreach($stages as $stage)

            <div class="creation-stage-name-subtitle">
                {{$stage}}
            </div>

            <div class="question-test-answers">
                @foreach($teachers as $teacher)
                    <label class="question-test-answer">
                        <input type="checkbox" >
                        <span>
                            {{$teacher}}
                        </span>
                    </label>
                @endforeach
            </div>

        @endforeach
    </div>

@endsection
