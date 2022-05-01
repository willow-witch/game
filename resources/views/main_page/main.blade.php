@extends('layout_main')

@section('content')

<div class="wrapper">
    <div class="page-name">
        >> Личный кабинет
    </div>

    <div class="content">

        <div class="user-wrapper">
            <div class="user-wrapper-title">
                Профиль
            </div>

            @yield('profile')

        </div>

        <div class="user-wrapper">

            @yield('games')


            @yield('create')

        </div>

    </div>
</div>

@endsection
