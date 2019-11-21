@extends('backend')

@section('title')
@endsection

@section('main')
    <div class="card border-primary mb-3" style="max-width: 30rem; margin: 1em">

        <form method="post" action="">
            @csrf
                <div class="card-header"><h6>Neuen Patient anlegen: </h6></div>
                <div class="card-body">
                    <label>SVNr:
                        <input class="form-control" type="text" name="svnr" value="" >
                    </label><br>
                    <label>Nachname:
                        <input class="form-control" type="text" name="svnr">
                    </label>
                    <label>Vorname:
                        <input class="form-control" type="text" name="svnr">
                    </label><br>
                    <label>Anschrift:
                        <input class="form-control" type="text" name="svnr">
                    </label>
                    <label>Postleitzahl:
                        <input class="form-control" type="text" name="svnr">
                    </label><br>
                    <label>Ort:
                        <input class="form-control" type="text" name="svnr">
                    </label>
                    <label>Land:
                        <input class="form-control" type="text" name="svnr">
                    </label><br>
                    <button class="btn btn-outline-primary" name="save">Speichern</button>
                </div>
        </form>

    </div>
@endsection


