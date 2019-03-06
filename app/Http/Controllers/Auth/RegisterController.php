<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/dashboard';

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        if(Auth::guard('admin')->check()) 
        {
            return redirect('/admin');
        } 
        else 
        {

                return redirect('/dashboard');

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('/edituser')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = request('new_name');
        $user->adres = request('new_adres');
        $user->huisnummer = request('new_huisnummer');
        $user->postcode = request('new_postcode');
        $user->telefoonnummer = request('new_telefoonnummer');
        $user->email = request('new_email');
        $user->gemeente = request('new_gemeente');


        $user->save();

        if(Auth::guard('admin')->check()) 
        {
            return redirect('/admin');
        } 
        else 
        {

                return redirect('/dashboard');

        }
    }
}
