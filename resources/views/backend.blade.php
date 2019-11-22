@extends('base')

@section('title')
    Home
@endsection
@section('top-links')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('patients') }}">Patient</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('backend') }}">Rechnung</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('backend') }}">Termin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('documentations') }}">Dokumentation</a>
    </li>
@endsection
@section ('main')
    Willkommen im Backend
@endsection
