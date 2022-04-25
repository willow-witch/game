<html>
<head>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/main_layout.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/stage_main.css">
</head>
<body>

<div class="header-background">

    <div class="logo-img-small">
    </div>

    <div class="user">
        <div class="user-name">
            User's name
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
