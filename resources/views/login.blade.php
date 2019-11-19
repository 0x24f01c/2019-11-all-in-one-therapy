@extends('base')
@section('title','Login')
@section('main')
    {{-- Login-Formular --}}
    <form method="post" action="{{  route('authenticate')  }}">
        @csrf
        @if ($errors->any())
        <p class="alert alert-danger">Die Zugangsdaten sind nicht korrekt!</p>
        @endif
        <p><label><input class="form-control" type="text" name="name" placeholder="Benutzer"></label></p>
        <p><label><input class="form-control" type="password" name="password" placeholder="Passwort"></label></p>
        <p>
            <button class="btn btn-primary" type="submit">Login</button>
        </p>
    </form>
@endsection
