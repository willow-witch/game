
@section('student_stage1_questions')
    <div class="stage-name">
        Портрет покупателя
    </div>

    <form>
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
                    <div class="question">
                        <div class="question-title">
                            {{$question["question"]}}
                        </div>

                        @if($question["type"] === "free")
                            <textarea class="question-free-answers" wrap="soft" placeholder="{{$question["answers"]}}" required></textarea>

                        @elseif($question["type"] === "test")
                            <div class="question-test-answers">
                                <?php
                                $count_answers = count($question["answers"]);
                                ?>
                                @for($i = 0; $i < $count_answers; $i++)
                                    <label class="question-test-answer">
                                        <input type="checkbox" >
                                        <span>
                                        {{$question["answers"][$i]}}
                                    </span>
                                    </label>
                                @endfor
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>

        <input type="submit" class="submit-button" placeholder="Submit">
    </form>


    <script src="/js/textarea_height.js"></script>

@endsection
