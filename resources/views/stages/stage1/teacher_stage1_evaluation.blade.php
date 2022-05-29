
@section('teacher_stage1_evaluation')

    <form method="post" action="evaluate">
        @csrf

        <div class="stage-criteria">
            <div class="stage-name">
                Критерии оценивания - {{$team_name}}
            </div>

            @foreach($criteria as $point)

                <div class="criteria">
                    <div class="criteria-title">
                        {{$point["criteria_name"]}}
                    </div>
                    <div class="radio-criteria">
                        @for($i=0; $i <= $point["max_point"]; $i++)
                            <label>
                                <input type="radio" name="{{$point["criteria_name"]}}" value="{{$i}}">
                                {{$i}}
                            </label>
                        @endfor
                    </div>
                </div>

            @endforeach

            <input type="submit" class="submit-button" placeholder="Submit">

        </div>

    </form>


@endsection
