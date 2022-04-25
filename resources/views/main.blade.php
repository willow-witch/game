@extends('layout_main')

@section('content')

<div class="wrapper">
    <div class="page-name">
        >> Личный кабинет
    </div>

    <div class="content">

        <div class="user-wrapper">
            <div class="user-wrapper-title">
                Profile
            </div>

            @yield('profile')

            <div class="user-profile-btn"> Statistics</div>
            <div class="user-profile-btn"> Edit</div>

        </div>

        <div class="user-wrapper">
            <div class="user-wrapper-title">
                Games
            </div>

            @yield('games')

            <div class="user-games-btn">
                @yield('create')
            </div>
        </div>



    </div>
</div>

@endsection
