@extends('layout_main')

@section('content')

<h1>Profile</h1>

@yield('profile')

<h1>Games</h1>

@yield('games')

<h1>Join | Create</h1>
@yield('create')

<a href="logout">Log out</a>

@endsection
