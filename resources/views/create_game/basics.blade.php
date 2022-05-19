
@section('basics')

    <div class="creation-stage-wrapper">
        <div class="creation-stage-name">
            Основное
        </div>

        <div class="creation-stage-vertical">
            <div class="creation-stage-horizontal">
                <input type="text" class="basic-parameter" placeholder="Название игры" name="game_name">

                <input type="number" class="basic-parameter" placeholder="Количество команд"
                       min="1" max="10" name="teams_number">

                <input type="date" class="basic-parameter" placeholder="Дата начала" name="start_date">

                <input type="date" class="basic-parameter" placeholder="Дата окончания" name="end_date">
            </div>

            <div class="creation-stage-name-subtitle">
                Группы студентов
            </div>

            <div class="question-test-answers" >
                @foreach($fields as $field)
                    <label class="question-test-answer">
                        <input type="checkbox" name="field[]" value="{{$field}}">
                        <span>
                            {{$field}}
                        </span>
                    </label>
                @endforeach
            </div>
        </div>


    </div>

@endsection
