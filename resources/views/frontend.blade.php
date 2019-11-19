@extends('base')
@section('title','Willkommen')
@section('top-links')
    @auth
        <a href="/backend">Backend</a>
    @endauth
@endsection
@section('main')
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                 aria-expanded="true" aria-controls="collapseOne">
                <h2 class="mb-0">
                        Über uns
                </h2>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading2"  data-toggle="collapse" data-target="#collapse2"
                 aria-expanded="true" aria-controls="collapse2">
                <h2 class="mb-0">
                    Leistungen
                </h2>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading3" data-toggle="collapse" data-target="#collapse3"
                 aria-expanded="true" aria-controls="collapse3">
                <h2 class="mb-0">
                    Preise
                </h2>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4" data-toggle="collapse" data-target="#collapse4"
                 aria-expanded="true" aria-controls="collapse4">
                <h2 class="mb-0">
                   Termine
                </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading4"  data-toggle="collapse" data-target="#collapse4"
                 aria-expanded="true" aria-controls="collapse4">
                <h2 class="mb-0">
                    Kontakt
                </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
@endsection
