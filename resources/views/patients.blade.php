@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <form method="post" action="">
        @csrf
        <table class="table table-hover text-left" id="patientTable">
            <thead>
            <tr>
                <th>
                    <button class="badge badge-primary">SVNr</button>
                </th>
                <th>Name</th>
                <th>Adresse</th>
                <th>PLZ</th>
                <th>Ort</th>
                <th>Land</th>
                <th><input class="form-control" name="search" placeholder="Suche..."/></th>
                <th><button type="submit" class="btn btn-outline-primary btn-lg btn-block" name="submit">🔍 - Suche</button></th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{ $patient->svnr  }}</td>
                    <td>{{ $patient->lastname  }}, {{ $patient->firstname  }}</td>
                    <td>{{ $patient->address  }}</td>
                    <td>{{ $patient->plz  }}</td>
                    <td>{{ $patient->city  }}</td>
                    <td>{{ $patient->country  }}</td>
                    <td><button class="btn btn-outline-primary btn-lg align-center">🗎 - Details</button></td>
                    <td><button class="btn btn-outline-danger btn-lg">🅇 - Löschen</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p> {{ $patients->links() }}</p>
    </form>
@endsection
@section('scripts')

    <script>
        function sortTable(n) {
            let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("patientTable");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir === "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir === "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount === 0 && dir === "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>
@endsection

