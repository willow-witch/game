@extends('layout_main')

@section('content')
<form class="sign-form" method="post" action="registration">
    @csrf
    <div class="input-wrapper">
        <input type="email" class="sign-input" name="email" placeholder="E-mail" required>

        <input type="password" class="sign-input" name="password" placeholder="Пароль" required>

        <input type="number" class="sign-input" name="role" placeholder="Роль" required min="1" max="3">
    </div>

    <input type="submit" class="sign-btn" value="Создать нового пользователя">



</form>

@endsection
