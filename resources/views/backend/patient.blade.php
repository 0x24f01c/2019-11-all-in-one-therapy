@extends('backend')

@section('title')
    @if($patient)
        Patient bearbeiten
    @else
        Neuer Patient
    @endif
@endsection
@section ('main')
    @if($patient)
        <h1>{{$patient->firstname}} {{$patient->lastname}}</h1>
    @endif
    <a href="{{ route('patients') }}">Alle Patienten anzeigen.</a>
    <h2>Stammdaten</h2>
    @if ($errors->any())
        <div class="validation-errors">
            <ul class="validation-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ $patient ? route('patient', $patient->id) : route('newpatient') }}">
        @csrf
        <div class="inputform">
            @error('firstname')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            @error('lastname')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            <p>


            </p>
            @error('email')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            <p>

            </p>
            @error('svnr')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            <p>

            </p>
            @error('address')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            @error('plz')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            @error('city')
            <p class="validation-error">{{ $message }}</p>
            @enderror
            @error('country')
            <p class="validation-error">{{ $message }}</p>
            @enderror<p>

                <br/>


                <br/>

            </p>
            <p>
                <button class="btn btn-outline-info" type="submit">{{ $patient ? 'Anlegen' : 'Speichern' }}</button>
            </p>


            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="svnr">SVNr: </label>
                    <input class="form-control" type="text" name="svnr" id="svnr"
                           value="{{$patient ? $patient->svnr : old('svnr')}}"
                           placeholder="SVNr">
                </div>
                <div class="form-group col-md-6">
                    <label for="firstname">Name:</label>
                    <input class="form-control" type="text" name="firstname" id="firstname"
                           value="{{$patient ? $patient->firstname : old('firstname')}}"
                           placeholder="Vorname">
                </div>

                <div class="form-group col-md-6">
                    <label for="lastname"></label>
                    <input class="form-control" type="text" name="lastname" id="lastname"
                           value="{{$patient ? $patient->lastname : old('lastname')}}"
                           placeholder="Nachname">
                </div>
                <div class="form-group col-md-4">
                    <label for="email">E-Mail:</label>
                    <input class="form-control" type="text" name="email" for="email"
                           value="{{$patient ? $patient->email : old('email')}}" placeholder="E-Mail">
                </div>


                <div class="form-group">
                    <label for="address">Adresse:</label>
                    <input class="form-control" type="text" name="address" id="address"
                           value="{{$patient ? $patient->address : old('address')}}"
                           placeholder="Adresse">
                </div>
                <div class="form-group col-md-4">
                    <label for="city">Ort:</label>
                    <input class="form-control" type="text" name="city" id="city"
                           value="{{$patient ? $patient->city : old('city')}}"
                           placeholder="Stadt">
                </div>
                <div class="form-group col-md-4">
                    <label for="country">Land:</label>
                    <input class="form-control" type="text" name="country" id="country"
                           value="{{$patient ? $patient->country: old('country')}}" placeholder="Land">
                </div>
                <div class="form-group col-md-2">
                    <label for="plz">PLZ: </label>
                    <input class="form-control" type="text" name="plz" id="plz"
                           value="{{$patient ? $patient->plz : old('plz')}}"
                           placeholder="PLZ">
                </div>
            </div>


        </div>
    </form>
    @if($patient)
        <form method="post" action="/patient/{{$patient->id}}/delete">
            @csrf
            <p>Diesen Patienten löschen:
                <button class="btn btn-outline-info" type="submit">Löschen</button>
            </p>
        </form>

        <h2>Dokumentationen</h2>
        @if(!empty($patient->documentations))
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Datum</th>
                    <th>Autor</th>
                    <th>Beschreibung</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patient->documentations as $documentation)
                    <tr>
                        <td>{{ $documentation->created_at->toDateString() }}</td>
                        <td>{{ $documentation->user->name }}</td>
                        <td>{{ $documentation->text }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>Keine Dokumentation vorhanden.</p>
        @endif


    @endif
    @if($patient)
        <p><a href="{{ route('newdocumentation', $patient->id) }}">Neue Dokumentation</a></p>
    @endif
    <p><a href="{{ route('patients') }}">Alle Patienten anzeigen.</a></p>
@endsection
