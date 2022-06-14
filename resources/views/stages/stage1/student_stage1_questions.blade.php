@section('student_stage1_questions')
    <div class="stage-name">
        Портрет покупателя
    </div>

    <form method="post" action="add_answers" enctype="multipart/form-data">
        @csrf

        <input hidden name="game_id" value="{{$game_id}}">
        <input hidden name="group_id" value="{{$group_id}}">
        <input hidden name="stage_id" value="{{$stage_id}}">

        <div class="questions-wrapper">
            <div class="left-column">
                <div class="buyer-pic">
                    <img src="/img/stage1pics/user.png" id="blah">
                </div>

                <label for="imgInp" class="add-pic">
                    Добавить изображение
                </label>
                <input type="file" name="image" id="imgInp" accept="image/*">
            </div>


            <div class="questions">
                @foreach($questions as $question)
                    <div class="question">
                        <div class="question-title">
                            {{$question["question"]}}
                        </div>

                        @switch($question["type"])

                            @case("free")
                            <textarea class="question-free-answers" wrap="soft" name="{{$question["question"]}}[]"
                                      placeholder="{{$question["question"]}}" required></textarea>
                            @break

                            @case("test-multiple-options")
                            <div class="question-test-answers">
                                @foreach($question["answers"] as $answer)
                                    <label class="question-test-answer">
                                        <input type="checkbox" name="{{$question["question"]}}[]" value="{{$answer}}">
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
                                        <input type="radio" name="{{$question["question"]}}[]" value="{{$answer}}">
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
    <script src="/js/add_image.js"></script>


@endsection
