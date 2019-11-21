@extends('base')
@section('title','Willkommen')
@section('top-links')
    @auth
        <li class="nav-item active">
            <a class="nav-link" href="/backend">Backend</a>
        </li>
    @endauth
@endsection
@section('main')
    <ul class="nav nav-tabs flex-center" style="margin: 1em;">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Willkommen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#services">Leistungen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#aboutUs">Über uns</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#prices">Preise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#appointments">Termine</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contact">Kontakt</a>
        </li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active show" id="home">
            <h1>Willkommen bei All-in-one Therapy</h1>
            <img src="img/blue-and-silver-stetoscope-40568.jpg" class="img-fluid" alt="Responsive image" style="max-height: 60em">
        </div>
        <div class="tab-pane fade" id="services">
            @component('text.leistungen')
            @endcomponent
        </div>
        <div class="tab-pane fade" id="aboutUs">
            @component('text.ueber-uns')
            @endcomponent
        </div>
        <div class="tab-pane fade" id="prices">
            @component('text.preise')
            @endcomponent
        </div>
        <div class="tab-pane fade" id="appointments">
            @component('text.termine')
            @endcomponent
        </div>
        <div class="tab-pane fade" id="contact">
            @component('text.kontakt')
            @endcomponent
        </div>
    </div>



@endsection
