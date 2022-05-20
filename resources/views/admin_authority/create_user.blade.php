@extends('layout_main')

@section('content')
<form class="sign-form">

    <div class="input-wrapper">
        <input type="email" class="sign-input" placeholder="E-mail" required>

        <input type="password" class="sign-input" placeholder="Пароль" required>

        <input type="number" class="sign-input" placeholder="Роль" required min="1" max="3">
    </div>


    <div class="sign-btn">
        <a href="student/profile">
            Зарегистрироваться
        </a>
    </div>


</form>

@endsection
