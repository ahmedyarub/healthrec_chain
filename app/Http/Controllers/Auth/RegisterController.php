<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Log;
use Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'role' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($data['role'] == 'Doctor') {
            $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'registerUser.js ' . $data['name']. ' 2>&1', $output, $return_var);

            Log::info($result);
            Log::info($output);
            Log::info($return_var);
        } elseif ($data['role'] == 'Patient') {
            $result = exec('cd ' . env('HYPERLEDGER_PATH') . ' && node ' . env('HYPERLEDGER_PATH') . 'invoke.js createPatient PATIENT' . $user->id . ' ' . $user->id. ' 2>&1', $output, $return_var);

            Log::info($result);
            Log::info($output);
            Log::info($return_var);
        }

        return $user;
    }
}
