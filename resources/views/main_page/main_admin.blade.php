@extends('main_page.main')


@section('profile')

    <div class="user-profile-image">
        <img src="/img/profilepics/queen.png">
    </div>

    @foreach($user_information as $item)
        <div class="user-profile-profile">
            <div>
                {{$item["key"]}}
            </div>
            <div>
                {{$item["value"]}}
            </div>
        </div>
    @endforeach
    <div class="user-profile-btn"> Edit</div>
@endsection
@section('games')

    <div class="user-wrapper-title">
        Редактировать
    </div>

    @for($i=1; $i <= $stages_count; $i++)
        <div class="admin-edit-stage-wrapper">
            <div class="admin-edit-stage-wrapper-btn">
                <a href="edit/stage/{{$i}}/questions">
                    {{$stages[$i-1]}} - Вопросы
                </a>
            </div>
            <div class="admin-edit-stage-wrapper-btn">
                <a href="edit/stage/{{$i}}/criteria">
                    {{$stages[$i-1]}} - Критерии
                </a>
            </div>
        </div>
    @endfor

@endsection
@section('create')
    <div class="user-games-btn">
        <a href="create_user">Создать пользователя</a>
    </div>
@stop
