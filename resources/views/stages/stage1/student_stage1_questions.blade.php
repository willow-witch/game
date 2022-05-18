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

{{--                <input type="text" class="characteristics" placeholder="Имя" required>--}}
{{--                <input type="text" class="characteristics" placeholder="Пол" required>--}}
{{--                <input type="text" class="characteristics" placeholder="Возраст" required>--}}

            </div>

            <div class="questions">
                @foreach($questions as $question)
                    <div class="question">
                        <div class="question-title">
                            {{$question["question"]}}
                        </div>

                        @switch($question["type"])

                            @case("free")
                            <textarea class="question-free-answers" wrap="soft" placeholder="{{$question["question"]}}" required></textarea>
                            @break

                            @case("test-multiple-options")
                            <div class="question-test-answers">
                                @foreach($question["answers"] as $answer)
                                    <label class="question-test-answer">
                                        <input type="checkbox" >
                                        <span>
                                            {{$answer}}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                            @break

                            @case("test-only-option")
                            <div class="question-test-answers">
                                @foreach($question["answers"] as $answer)
                                    <label class="question-test-answer">
                                        <input type="radio" name="{{$question["question"]}}">
                                        <span>
                                            {{$answer}}
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                            @break

                        @endswitch
                    </div>
                @endforeach
            </div>
        </div>

        <input type="submit" class="submit-button" placeholder="Submit">
    </form>


    <script src="/js/textarea_height.js"></script>

@endsection
