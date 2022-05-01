<?php

$criteria = [
    "teachers" => [
        "teacher1",
        "teacher2",
        "teacher3"
    ],
    "criteria" => [
        [
            "criteria_name" => "criteria1",
            "points" => [
                "c1p1",
                "c1p2",
                "c1p3"
            ]
        ],
        [
            "criteria_name" => "criteria2",
            "points" => [
                "c2p1",
                "c1p2",
                "c2p3"
            ]
        ],
        [
            "criteria_name" => "criteria3",
            "points" => [
                "c3p1",
                "c3p2",
                "c3p3"
            ]
        ],
        [
            "criteria_name" => "criteria4",
            "points" => [
                "c1p1",
                "c1p2",
                "c1p3"
            ]
        ]
    ]
];

?>

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


