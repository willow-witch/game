
@section('teacher_stage1_evaluation')

    <form>
        <div class="stage-criteria">
            <div class="stage-name">
                Критерии оценивания - {{$team_name}}
            </div>

            @foreach($criteria as $point)
                @switch($point["type"])
                    @case('free')
                    <div class="criteria">
                        <div class="criteria-title">
                            {{$point["criteria_name"]}}
                        </div>
                        <div class="free-criteria">
                            <input type="number" class="free-criteria-point"
                                   placeholder="{{$point["score"]}}" min="0" max="{{$point["max_point"]}}"required>
                            <div class="free-criteria-max-point"> / </div>
                            <div class="free-criteria-max-point">{{$point["max_point"]}}</div>
                        </div>
                    </div>
                    @break

                    @case('radio')
                    <div class="criteria">
                        <div class="criteria-title">
                            {{$point["criteria_name"]}}
                        </div>
                        <div class="radio-criteria">
                            @for($i=0; $i <= $point["max_point"]; $i++)
                                <label>
                                    <input type="radio" name="{{$point["criteria_name"]}}">
                                    {{$i}}
                                </label>
                            @endfor
                        </div>
                    </div>
                    @break

                    @case('range')
                    <div class="criteria">
                        <div class="criteria-title">
                            {{$point["criteria_name"]}}
                        </div>
                        <div class="min-point" id="{{$point["criteria_name"]}}">
                            0
                        </div>
                        <input type="range" class="range-point" min="0" max="{{$point["max_point"]}}" value="0"
                               onchange="getElementById('{{$point["criteria_name"]}}').innerHTML=this.value;">
                        <div class="max-point">
                            {{$point["max_point"]}}
                        </div>

                    </div>
                    @break

                @endswitch
            @endforeach

            <input type="submit" class="submit-button" placeholder="Submit">

        </div>

    </form>


@endsection
