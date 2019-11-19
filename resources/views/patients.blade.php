@extends('backend')

@section('title')Patienten &ndash;
@parent
@endsection

@section('main')
    <form method="post">
        <label>
            <input class="form-control" name="search" placeholder="Suche..."/>
            <button class="btn btn-primary">Lupe</button>
        </label>
        <table class="table table-hover text-left" id="patientTable">
            <thead>
            <tr>
                <th>SVNr <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
                <th>Name <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
                <th>Adresse <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
                <th>PLZ <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
                <th>Ort <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
                <th>Land <a onclick="sortTable(0)">⮭</a><a onclick="sortTable(1)">⮮</a></th>
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
                    // Start by saying: no switching is done:
                    switching = false;
                    rows = table.rows;
                    /* Loop through all table rows (except the
                    first, which contains table headers): */
                    for (i = 1; i < (rows.length - 1); i++) {
                        // Start by saying there should be no switching:
                        shouldSwitch = false;
                        /* Get the two elements you want to compare,
                        one from current row and one from the next: */
                        x = rows[i].getElementsByTagName("TD")[n];
                        y = rows[i + 1].getElementsByTagName("TD")[n];
                        /* Check if the two rows should switch place,
                        based on the direction, asc or desc: */
                        if (dir === "asc") {
                            if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                // If so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;
                            }
                        } else if (dir === "desc") {
                            if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                // If so, mark as a switch and break the loop:
                                shouldSwitch = true;
                                break;
                            }
                        }
                    }
                    if (shouldSwitch) {
                        /* If a switch has been marked, make the switch
                        and mark that a switch has been done: */
                        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                        switching = true;
                        // Each time a switch is done, increase this count by 1:
                        switchcount ++;
                    } else {
                        /* If no switching has been done AND the direction is "asc",
                        set the direction to "desc" and run the while loop again. */
                        if (switchcount === 0 && dir === "asc") {
                            dir = "desc";
                            switching = true;
                        }
                    }
                }
            }
        </script>
@endsection

