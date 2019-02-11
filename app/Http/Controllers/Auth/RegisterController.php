<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'min:2', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'adres' => ['required', 'string', 'max:255'],
            'huisnummer' => ['required', 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'telefoonnummer' => ['required', 'string', 'max:10', 'min:10', 'unique:users', 'regex:/^[0-9]+$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

            $selectData = $request->input('gemeente');

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'adres' => $data['adres'],
            'huisnummer' => $data['huisnummer'],
            'postcode' => $data['postcode'],
            'telefoonnummer' => $data['telefoonnummer'],
            'email' => $data['email'],
            'gemeente' => $data['gemeente'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
