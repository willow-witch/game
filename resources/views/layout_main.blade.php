<html>
<head>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/main_layout.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/stage_main.css">
    <link rel="stylesheet" href="/css/stage1_student_questions.css">
    <link rel="stylesheet" href="/css/stage1_teacher_answers.css">
    <link rel="stylesheet" href="/css/stage1_student_criteria.css">
    <link rel="stylesheet" href="/css/stage1_teacher_evaluation.css">
    <link rel="stylesheet" href="/css/create_game.css">
    <link rel="stylesheet" href="/css/signpage.css">
</head>
<body>
<div class="header-background">

    <div class="logo-img-small">
    </div>

    <div class="user">
        <div class="user-name">
            {{$user_name}}
        </div>

        <a href="/logout">
            <div class="log-out">
            </div>
        </a>
    </div>

</div>


@yield('content')

<div class="footer">
    footer
</div>

</body>
</html>

