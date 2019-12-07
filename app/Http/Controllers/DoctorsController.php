<?php

namespace App\Http\Controllers;

use App\Message;
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
        chdir(env('HYPERLEDGER_PATH'));
        putenv('LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64');
        $result = exec('node query.js queryPatient admin PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $authorized = [];
        $doctors = [];

        if (count($output) > 0) {
            $doctors = User::where('role', 'Doctor')->orWhere('role', 'Nurse')->get();

            $accesses = json_decode($output[0]);

            if ($accesses != null)
                $authorized = explode(',', $accesses->access);
        }

        return view('doctors', compact('doctors', 'authorized'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAll()
    {
        $doctors = User::where('role', 'Doctor')->where('id', '!=', Auth::user()->id)->get();

        return view('alldoctors', compact('doctors'));
    }

    public function grant(Request $request)
    {
        chdir(env('HYPERLEDGER_PATH'));
        putenv('LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64');
        $result = exec('node invoke.js grantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/doctors');
    }

    public function deny(Request $request)
    {
        chdir(env('HYPERLEDGER_PATH'));
        putenv('LD_LIBRARY_PATH=/usr/local/lib:/usr/lib:/usr/local/lib64:/usr/lib64');
        $result = exec('node invoke.js ungrantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/doctors');

    }

    public function sendMessage(Request $request)
    {
        $message = new Message();

        $message->message = $request->message;
        $message->from_doctor = Auth::user()->id;
        $message->to_doctor = $request->id;

        $message->save();

        return redirect('/doctors/all');
    }

}
