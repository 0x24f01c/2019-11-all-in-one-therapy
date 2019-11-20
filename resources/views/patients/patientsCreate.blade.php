@extends('backend')

@section('title')
@endsection

@section('main')
    <div class="card border-primary mb-3" style="max-width: 30rem; margin: 1em">

        <form method="post" action="">
            @csrf
            @foreach($patients as $patient)
                <div class="card-header"><h6>Patient: {{$patient->firstname}} {{$patient->lastname}}</h6></div>
                <div class="card-body">
                    <label>SVNr:
                        <input class="form-control" type="text" name="svnr" value="{{ $patient->svnr  }}">
                    </label><br>
                    <label>Nachname:
                        <input class="form-control" type="text" name="svnr" value="{{ $patient->lastname  }}">
                    </label>
                    <label>Vorname:
                        <input class="form-control" type="text" name="svnr" value="{{ $patient->firstname  }}">
                    </label><br>
                    <label>Anschrift:
                        <input class="form-control" type="text" name="svnr" value=" {{ $patient->address  }}">
                    </label>
                    <label>Postleitzahl:
                        <input class="form-control" type="text" name="svnr" value="{{ $patient->plz  }}">
                    </label><br>
                    <label>Ort:
                        <input class="form-control" type="text" name="svnr" value="{{ $patient->city  }}">
                    </label>
                    <label>Land:
                        <input class="form-control" type="text" name="svnr" value=" {{ $patient->country  }}">
                    </label><br>
                    @endforeach
                    <button class="btn btn-outline-primary" name="save">Speichern</button>
                </div>
        </form>

    </div>
@endsection


