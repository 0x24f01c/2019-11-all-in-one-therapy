@extends('backend')

@section('title')
    Meine Dokumentation


@endsection
@section ('main')
    @if(!empty($documentations))

        <table class="table table-hover">
            <thead>
            <tr>
                <th>Datum</th>
                <th>Patient</th>
                <th>SVNr</th>
                <th>Text</th>
            </tr>
            </thead>
            <tbody>
            @forelse($documentations as $documentation)
                <tr>
                    <td>
                        {{ $documentation->created_at->toDateString() }}
                    </td>
                    <td>
                        {{ $documentation->patient->firstname }} {{ $documentation->patient->lastname }}
                    </td>
                    <td>
                        {{ $documentation->patient->svnr }}
                    </td>
                    <td>
                        {{ $documentation->text }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Keine Dokumentation vorhanden.</p>
    @endif
    <p>
        {{ $documentations->links() }}</p>
@endsection
