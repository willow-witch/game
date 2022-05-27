@extends('layout_main')

@section('content')
<form class="sign-form" method="post" action="registration">
    @csrf
    <div class="create-user-wrapper">

        <div class="creation-stage-horizontal">
            <div class="creation-stage-vertical" style="margin-right: 50px">
                <input type="email" class="sign-input" name="email" placeholder="E-mail" required>

                <input type="password" class="sign-input" name="password" placeholder="Пароль" required>
            </div>

            <div class="creation-stage-vertical">
                <input type="text" class="sign-input" name="firstname" placeholder="Имя" required>

                <input type="text" class="sign-input" name="lastname" placeholder="Фамилия" required>
            </div>
        </div>

        <div class="question-test-answers" style="flex-wrap: nowrap; margin: -30px 0 10px 0">
            @foreach($roles as $role)
                <label class="question-test-answer">
                    <input type="radio" name="rus_role" value="{{$role}}">
                    <span>
                    {{$role}}
                </span>
                </label>
            @endforeach
        </div>

        <div class="creation-stage-vertical">
            <input type="number" class="sign-input" name="year" placeholder="Курс (для студентов)" min="1" max="4">

            <input type="text" class="sign-input" name="field" placeholder="Направление">
        </div>



    </div>

    <input type="submit" class="submit-btn" value="Создать нового пользователя">



</form>

@endsection
