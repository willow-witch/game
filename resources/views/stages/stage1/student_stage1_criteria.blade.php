
@section('student_stage1_criteria')

    <div class="stage-name">
        Оценка
    </div>

    <table class="table-wrapper">

        <thead class="table-head">
            <td>
                Критерии / Преподаватели
             </td>
            @foreach($criteria["teachers"] as $teacher)
                <td>
                    {{$teacher}}
                </td>
            @endforeach
        </thead>

        <tbody class="table-body">
        @foreach($criteria["criteria"] as $item)
            <tr>

            <td>
                {{$item["criteria_name"]}}
            </td>

            @foreach($item["points"] as $point)
                <td>
                    {{$point}}
                </td>
            @endforeach

            </tr>
        @endforeach

        </tbody>
    </table>


@endsection


