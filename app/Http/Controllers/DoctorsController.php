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
        $doctors = User::where('role', 'Doctor')->get();

        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'query.js queryPatient admin PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        $accesses = json_decode(json_decode($output[0]));
        $authorized = [];

        if ($accesses != null)
            $authorized = explode(',', $accesses->access);

        return view('doctors', compact('doctors', 'authorized'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAll()
    {
        $doctors = User::where('role', 'Doctor')->where('id','!=',Auth::user()->id)->get();

        $messages = Message::where('from_doctor', Auth::user()->id)
            ->orWhere('to_doctor', Auth::user()->id)
            ->orderBy('created_at')
            ->get();


        return view('alldoctors', compact('doctors', 'messages'));
    }

    public function grant(Request $request)
    {
        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node invoke.js grantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

        Log::info($result);
        Log::info($output);
        Log::info($return_var);

        return redirect('/doctors');
    }

    public function deny(Request $request)
    {
        $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node invoke.js ungrantDoctor ' . User::find($request->id)->name . ' PATIENT' . Auth::user()->id . ' 2>&1', $output, $return_var);

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
