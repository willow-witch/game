@section('student_stage2_questions')

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

                        <input class="question-free-answers" name="{{$question['id']}}" wrap="soft"
                               placeholder="{{$question["question_help"]}}" required>

                    </div>
                @endforeach
            </div>

        </div>

        <input type="submit" class="submit-button">

    </form>

    <script src="/js/textarea_height.js"></script>
    <script src="/js/add_image.js"></script>

@endsection
