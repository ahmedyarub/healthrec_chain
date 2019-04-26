<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Carbon\Carbon;
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
        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryAllPatients ' . Auth::user()->name, $output, $return_var);

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

        $doctor_name = (Auth::user()->role == "Doctor" ? Auth::user()->name : "admin");
        $patient_id = (Auth::user()->role == "Doctor" ? $request->patient_id : Auth::user()->id);
        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryPatient ' . $doctor_name . ' PATIENT' . $patient_id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $id = $request->patient_id;
        $records = json_decode(json_decode($result));

        $diagnosevalue = $records->diagnosis;
        $treatmentvalue = $records->treatment;

        $patient = User::find($request->patient_id);

        if (Auth::user()->role == "Patient") {
            $patient->new_report = false;
            $patient->save();
            $records_history = [];
        } else {
            $result2 = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js getLedgerHistory PATIENT' . $patient_id . ' 2>&1', $output2, $return_var2);

            Log::info($result2);
            Log::info($output2);
            Log::info($return_var2);

            $records_history = collect(json_decode($output2[0]))
                ->mapWithKeys(function ($item) {
                    return [Carbon::createFromTimestamp($item->Timestamp->seconds->low)->toDateTimeString()
                    => [$item->Value->lastupdater, $item->Value->diagnosis,$item->Value->treatment]];
                })->filter(function ($value, $key) {
                    return $value[0] != '' && $value[1] != '';
                });
        }

        return view('patient_record', compact('id', 'diagnosevalue', 'treatmentvalue', 'patient', 'records_history'));
    }

    public function updateRecord(Request $request)
    {
        $temp1 = tmpfile();
        fwrite($temp1, $request->diagnosevalue);
        fflush($temp1);
        $metaDatas1 = stream_get_meta_data($temp1);
        $tmpFilename1 = $metaDatas1['uri'];


        $temp2 = tmpfile();
        fwrite($temp2, $request->treatmentvalue);
        fflush($temp2);
        $metaDatas2 = stream_get_meta_data($temp2);
        $tmpFilename2 = $metaDatas2['uri'];


        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'invoke.js updatePatientRecord PATIENT' . $request->id . ' ' . Auth::user()->name . ' "' . $tmpFilename1 . '" "' . $tmpFilename2 . '" 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $patient = User::find($request->id);
        $patient->new_report = true;
        $patient->save();

        fclose($temp1);
        fclose($temp2);

        return redirect('/patients/record/' . $request->id);
    }
}
