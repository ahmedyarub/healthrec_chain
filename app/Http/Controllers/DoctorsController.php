<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Log;

class DoctorsController extends Controller
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
        $doctors = User::where('role', 'Doctor')->get();

        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryPatient admin PATIENT' . Auth::user()->id , $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $authorized = explode(',', json_decode(json_decode($output[0]))->access);

        return view('doctors', compact('doctors', 'authorized'));
    }

    public function grant(Request $request)
    {
        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node invoke.js grantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id, $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/doctors');
    }

    public function deny(Request $request)
    {
        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node invoke.js ungrantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id. ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/doctors');

    }
}
