<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Log;
use View;
use Auth;

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
        $doctors = User::where('role','Doctor');

        $result = exec('export LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64 && cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryPatient admin PATIENT' . Auth::user()->id, $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $authorized = explode(',', json_decode(json_decode($output[0]))->access);

        return view('doctors', compact('doctors', 'authorized'));
    }
}
