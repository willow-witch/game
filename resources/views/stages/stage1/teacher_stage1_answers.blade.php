
@section('teacher_stage1_answers')

        <div class="stage-background">
            <div class="team-name">
                Ответы - {{$team_name}}
            </div>

            <div class="questions-wrapper">
                <div class="left-column">
                    <div class="buyer-pic">
                        <img src="{{$image}}">
                    </div>

                </div>

                <div class="questions">
                    @foreach($answers as $question)
                    <div class="question">

                        @switch($question["type"])

                            @case("free")
                                <div class="question-title">
                                    {{$question["question"]}}
                                </div>
                                <div class="teacher-question-free-answers">
                                    @foreach($question["answers"] as $answer)
                                        {{$answer}}
                                    @endforeach
                                </div>
                            @break

                            @case("test-multiple-options")
                                <div class="question-title">
                                    {{$question["question"]}}
                                </div>
                                <div class="teacher-question-test-answers">
                                    @foreach($question["answers"] as $answer)
                                        <div class="teacher-question-test-answer">
                                            {{$answer}}
                                        </div>
                                    @endforeach
                                </div>
                            @break

                            @case("test-only-option")
                                <div class="question-title-only-option">
                                    <div class="question-title">
                                        {{$question["question"]}}
                                    </div>
                                    <div class="teacher-question-test-answers">
                                        @foreach($question["answers"] as $answer)
                                            <div class="teacher-question-free-answers">
                                                {{$answer}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @break

                        @endswitch
                    </div>
                @endforeach
                </div>
            </div>
        </div>

@endsection
