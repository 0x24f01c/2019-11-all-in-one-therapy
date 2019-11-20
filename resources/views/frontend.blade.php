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

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection
