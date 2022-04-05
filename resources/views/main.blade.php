@extends('layout_main')

@section('content')

<div class="wrapper">
    <div class="page-name">
        >> Личный кабинет
    </div>

    <div class="content">

        <div class="user-profile">
            <div class="user-profile-title">
                Profile
            </div>

            <div class="user-profile-profile">
                @yield('profile')
            </div>
        </div>

        <div class="user-games">
            <div class="user-games-title">
                Games
            </div>
            <div class="user-games-games">
                @yield('games')
            </div>

            <div class="user-games-create">
                @yield('create')
            </div>
        </div>



    </div>
</div>

@endsection
