
@section('teacher_stage2_answers')

    <div class="stage-background">
        <div class="team-name">
            Ответы - {{$team_name}}
        </div>

        <div class="questions-wrapper">
            <div class="left-column">
                <div class="buyer-pic">
                    <img src="/img/stage2pics/tshirt.png">
                </div>

            </div>

            <div class="questions">
                @foreach($answers as $question)
                    <div class="question">

                        <div class="creation-stage-horizontal">
                            <div class="question-title">
                                {{$question["question"]}}
                            </div>

                            <input type="number" class="characteristics" min="1" max="10"
                                   style="width: 150px; background: rgba(246, 165, 0, 0.8); : black"
                                   value="1" required>
                        </div>

                            <div class="teacher-question-test-answers">
                                @foreach($question["answers"] as $answer)
                                    <div class="teacher-question-test-answer">
                                        {{$answer}}
                                    </div>
                                @endforeach
                            </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
