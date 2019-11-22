@extends('backend')

@section('title')
    Patienten
@endsection
@section ('main')

    @if (count($patients)>0)
        <table class="table table-hover">
            <thead>
            <tr>
                @if( $orderBy == 'lastname')
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'lastname', 'orderDirection' => $inverseOrderDirection]) }}">Name {!! $orderDirectionIndicator !!}</a>
                    </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'lastname', 'orderDirection' => $orderDirection]) }}">Name</a>
                    </th>
                @endif
                @if( $orderBy == 'svnr')
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'svnr', 'orderDirection' => $inverseOrderDirection]) }}">SVNr {!! $orderDirectionIndicator !!}</a>
                    </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'svnr', 'orderDirection' => $orderDirection]) }}">SVNr</a>
                    </th>
                @endif
                @if ($orderBy == 'address')
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'address', 'orderDirection' => $inverseOrderDirection]) }}">Adresse {!! $orderDirectionIndicator !!}</a>
                    </th>
                @else
                    <th>
                        <a href="{{ request()->fullUrlWithQuery(['orderBy' => 'address', 'orderDirection' => $orderDirection]) }}">Adresse</a>
                    </th>
                @endif
                <form method="post" action="{{ route('patients') }}">
                    @csrf
                    <th><input type="text" name="query" placeholder="Name oder SVNr"
                               value="{{ request()->get('query') }}">
                    </th>
                    <th>
                        <button class="btn btn-outline-info" type="submit">Suchen</button>
                    </th>
                    <th><a class="btn btn-outline-info" href="{{ route('newpatient') }}">+</a></th>
                </form>
            </thead>
            <tbody>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($patients as $patient)
                @php
                    if (!$i){
                    echo "<tr>";
                    $i=1;
                    }
                else{
                echo "<tr class='table-primary'>";
                $i=0;
                }
                @endphp
                <td>
                    <strong><a class="card-link" href="{{ route('patient', $patient->id) }}">
                            {{$patient->firstname }} {{$patient->lastname}}
                        </a></strong>
                </td>
                <td>
                    {{$patient->svnr}}
                </td>
                <td>
                    {{$patient->address}},
                    {{$patient->plz}} {{$patient->city}},
                    {{$patient->country}}
                </td>
                <td>
                    <form method="post" action="/patient/{{$patient->id}}/delete">
                        @csrf
                        <button class='btn btn-outline-info' type='submit'>Löschen</button>
                    </form>
                </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {{ $patients->links() }}
    @else
        Keine Patienten gefunden. <a href="{{ route('patients') }}">Alle Patienten anzeigen.</a>
    @endif
@endsection
