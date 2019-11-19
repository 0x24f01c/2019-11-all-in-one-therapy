@extends('base')
@section('title','Willkommen')
@section('top-links')
    @auth
        <a href="/backend">Patient</a>
        <a href="/backend">Kalender</a>
        <a href="/backend">Doku</a>
        <a href="/">Frontend</a>
    @endauth
@endsection
@section('main')
    Willkommen bei AIOT.
@endsection
