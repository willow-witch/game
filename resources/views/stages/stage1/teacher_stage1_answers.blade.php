
@section('teacher_stage1_answers')

        <div class="stage-background">
            <div class="team-name">
                Ответы - {{$team_name}}
            </div>

            <div class="questions-wrapper">
                <div class="left-column">
                    <div class="buyer-pic">
                        <img src="/img/stage1pics/profile.png">
                    </div>

                    <div class="teacher-characteristics">
                        <div class="char-key">
                            Имя
                        </div>
                        <div class="char-value">
                            Имя
                        </div>

                    </div>
                    <div class="teacher-characteristics">
                        <div class="char-key">
                            Пол
                        </div>
                        <div class="char-value">
                            Пол
                        </div>
                    </div>
                    <div class="teacher-characteristics">
                        <div class="char-key">
                            Возраст
                        </div>
                        <div class="char-value">
                            Возраст
                        </div>
                    </div>

                </div>

                <div class="questions">
                    @foreach($answers as $question)
                    <div class="question">
                        <div class="question-title">
                            {{$question["question"]}}
                        </div>

                        @if($question["type"] === "free")
                            <div class="teacher-question-free-answers">
                                {{$question["answers"]}}
                            </div>

                        @elseif($question["type"] === "test")
                            <div class="teacher-question-test-answers">
                                <?php
                                $count_answers = count($question["answers"]);
                                ?>
                                @for($i = 0; $i < $count_answers; $i++)
                                    <div class="teacher-question-test-answer">
                                            {{$question["answers"][$i]}}
                                    </div>
                                @endfor
                            </div>
                        @endif
                    </div>
                @endforeach
                </div>
            </div>
        </div>

@endsection
