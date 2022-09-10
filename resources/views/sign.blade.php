<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\UserController;

$sign = new UserController();

$sign -> sign();

?>

<html>
<head>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/signpage.css">
</head>
<body>

    <form class="sign-form" method="post" action="login">
        @csrf
        <div class="logo-img-big">
        </div>

        @if($errors->any())
            <div class="error-message">{{$errors->first()}}</div>
        @endif

        <div class="input-wrapper">

            <input class="sign-input" id="email" type="email" name="email" placeholder="E-mail" value="">
            @error('email')
            <div class = "alert alert-danger">({ $message })</div>
            @enderror
            <input class="sign-input" id="password" type="password" name="password" placeholder="Пароль" value="">
            @error('email')
            <div class = "alert alert-danger">({ $message })</div>
            @enderror
        </div>

        <input type="submit" class="submit-btn" value="Войти">

{{--        <div class="sign-btn">--}}
{{--            <button class="send" type="submit" name="sendMe" value="1">Student</button>--}}
{{--        </div>--}}

{{--        <div class="sign-btn">--}}
{{--            <a href="teacher/profile">--}}
{{--                teacher--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <div class="sign-btn">--}}
{{--            <a href="admin/profile">--}}
{{--                admin--}}
{{--            </a>--}}
{{--        </div>--}}
    </form>


</body>
</html>
