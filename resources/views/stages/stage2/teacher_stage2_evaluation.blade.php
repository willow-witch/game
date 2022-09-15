@section('teacher_stage2_evaluation')

    <div class="stage-background">
        <div class="team-name">
            Ответы - {{$team_name}}
        </div>

            @csrf

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

                            @foreach($score as $temp_score)
                                @if($question['id'] == $temp_score['answer_id'])
                                        <input value = "{{$temp_score['score']}}" type="number" class="characteristics" min="1" max="10"
                                        style="width: 150px; background: rgba(246, 165, 0, 0.8); : black" readonly>
                                    @break
                                @endif
                            @endforeach
                        </div>

                            <div class="teacher-question-test-answers">

                                    <div class="teacher-question-test-answer">
                                        {{$question["answer"]}}
                                    </div>

                            </div>
                        <div class="teacher-question-test-answers">

{{--                            <div class="teacher-question-test-answer">--}}
{{--                                @foreach($question['teacher'] as $teacher)--}}
{{--                                    {{$teacher}}--}}
{{--                                @endforeach--}}
{{--                            </div>--}}

                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
