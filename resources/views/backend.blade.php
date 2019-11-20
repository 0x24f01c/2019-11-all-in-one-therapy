@extends('base')
@section('title','Backend')
@section('top-links')
    @auth
        <li class="nav-item active">
            <a class="nav-link" href="/patients">Patient</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/backend">Kalender</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/backend">Doku</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/">Frontend</a>
        </li>
    @endauth
@endsection
@section('main')
    Willkommen im Backend.
@endsection
