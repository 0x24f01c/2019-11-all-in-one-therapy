@extends('base')
@section('top-links')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('backend') }}">|  Backend</a>
    </li>
@endsection
@section('main')
    <div class="content">
        <div class="title m-b-md">
            All-in-one Therapy
        </div>

        <main>
            <div class="about-us">
                <h1>Über uns</h1>
                <div></div>
            </div>
            <div class="services">
                <h1>Leistungen</h1>
                <div></div>
            </div>
            <div class="map">
                <h1>Anfahrt</h1>
                <div></div>
            </div>
            <div class="contact">
                <h1>Kontakt</h1>
                <div></div>
            </div>
        </main>
    </div>
@endsection
