<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $suche = $request->post('search');
            $patients = DB::table('patients')
                ->where('lastname', 'like', '%' . $suche . '%')
                ->orWhere('svnr', 'like', '%' . $suche . '%')
                ->orWhere('email', 'like', '%' . $suche . '%')
                ->paginate(10);
            return view('patients', [
                'patients' => $patients,
            ]);
        }
        $patients = DB::table('patients')->paginate(10);
        return view('patients.patients', [
            'patients' => $patients,
        ]);
    }

    public function edit($id)
    {
        $patients = DB::table('patients')->where('id', '=', $id)->get();
        return view('patients.patientsEdit', [
            'patients' => $patients,
        ]);
    }

    public function create()
    {

    }

    public function store()
    {

    }
}

