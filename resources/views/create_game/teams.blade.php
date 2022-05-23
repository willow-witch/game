
@section('teams')

    <form>
        <div class="stage-background">

            <div class="creation-stage-wrapper">
                <div class="creation-stage-name">
                    Основное
                </div>

                <div class="creation-stage-horizontal">
                    <input type="text" class="basic-parameter" placeholder="Название команды" name="team_name">

                </div>

                <div class="creation-stage-name-subtitle">
                    Студенты
                </div>

                <div class="question-test-answers" >
                    @foreach($students as $student)
                        <label class="question-test-answer">
                            <input type="checkbox" name="students[]" value="{{$student}}">
                            <span>
                                {{$student}}
                            </span>
                        </label>
                    @endforeach
                </div>

            </div>

        </div>

    </form>




@endsection
