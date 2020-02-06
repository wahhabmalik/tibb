<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Patient;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'user_type' => ['required', 'string', 'in:physician,pharmacist,patient'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string', 'max:11', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data['dob']);

        if($data['user_type'] == 'patient'){
            Patient::create([
                'dob' => $data['dob'],
                'emp_status' => $data['emp_status'],
                'company_name' => $data['company_name'],
                'company_web' => $data['company_web'],
                'marital_status' => $data['marital_status'],
                'family_size' => $data['family_size'],
                'nic_no' => $data['nic_no'],
            ]);
        }
        return User::create([
            'name' => $data['name'],
            'l_name' => $data['l_name'],
            'user_type' => $data['user_type'],
            'email' => $data['email'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'specialty' => $data['specialty'] ?? '',
            'pmdc_id' => $data['pmdc_id'] ?? 0,
            'dea' => $data['dea'] ?? 0,
            'password' => Hash::make($data['password']),
        ]);



    }
}
