<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Log;

class PatientsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryAllPatients ' . Auth::user()->name, $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $records = new Collection(json_decode(json_decode($result)));

        $patients = User::whereIn('id', $records->map(function ($value) {
            return intval($value->Record->id);
        }))->get();

        return view('patients', compact('patients'));
    }

    public function getRecord(Request $request)
    {
        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryPatient ' . Auth::user()->name . ' PATIENT' . $request->patient_id. ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $id = $request->patient_id;
        $record = json_decode(json_decode($result))->tests;

        return view('patient_record', compact('id', 'record'));
    }

    public function updateRecord(Request $request)
    {
        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'invoke.js updatePatientRecord PATIENT' . $request->id . ' "' . $request->record . '" 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/patients/record/' . $request->id);
    }
}
