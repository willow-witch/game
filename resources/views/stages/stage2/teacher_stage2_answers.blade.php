
@section('teacher_stage2_answers')

    <div class="stage-background">
        <div class="team-name">
            Ответы - {{$team_name}}
        </div>

        <form method="post" action="evaluate">
            @csrf

            <input hidden name="group_id" value="{{$team}}">
            <input hidden name="stage_id" value="{{$stage_id}}">

            <div class="questions-wrapper">
            <div class="left-column">
                <div class="buyer-pic">
                    <img src="{{$image}}">
                </div>

            </div>

            <div class="questions">
                @foreach($answers as $question)
                    <div class="question">

                        <div class="creation-stage-horizontal">
                            <div class="question-title">
                                {{$question["question"]}}
                            </div>

                            <input name = "{{$question['answer']}}" type="number" class="characteristics" min="1" max="10"
                                   style="width: 150px; background: rgba(246, 165, 0, 0.8); : black"
                                   value="1" required>
                        </div>

                            <div class="teacher-question-test-answers">

                                    <div class="teacher-question-test-answer">
                                        {{$question["answer"]}}
                                    </div>

                            </div>

                    </div>
                @endforeach

                <input type="submit" class="submit-button" placeholder="Submit">
            </div>
        </div>
    </div>

@endsection
