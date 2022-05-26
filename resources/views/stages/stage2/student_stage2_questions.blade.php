@section('student_stage2_questions')

    <div class="stage-name">
        Портрет покупателя
    </div>

    <form>
        <div class="questions-wrapper">
            <div class="left-column">
                <div class="buyer-pic">
                    <img src="/img/stage2pics/tshirt.png">
                </div>

                <div class="add-pic">
                    Добавить изображение
                </div>

            </div>

            <div class="questions">
                @foreach($questions as $question)
                    <div class="question">
                        <div class="question-title">
                            {{$question["question"]}}
                        </div>

                        <textarea class="question-free-answers" wrap="soft" placeholder="{{$question["question_help"]}}" required></textarea>


                        <div class="question-test-answers">
                            <div class="question-test-answer">
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

        <input type="submit" class="submit-button">

    </form>

    <script src="/js/textarea_height.js"></script>

@endsection
