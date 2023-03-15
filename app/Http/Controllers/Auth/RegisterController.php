<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
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
            '_token' => ['required', 'string', 'max:50', 'alpha_num'],
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:50', 'unique:users'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'address' => ['required', 'string', 'max:100'],
            'contact' => ['required', 'string', 'max:12'],
            'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed',  'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!*#?&]/'],
            'checkbox' => 'required'
        ],[
            '_token.required' => 'Please refrain from modifying the form data.',
            '_token.alpha_num' => 'Please refrain from modifying the form data.',
            '_token.max' => 'Please refrain from modifying the form data.',
            'first_name.required' => 'First name is required',
            'first_name.max' => 'First name must not exceed 50 characters',
            'last_name.required' => 'Last name is required',
            'last_name.max' => 'Last name must not exceed 50 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.max' => 'Email must not exceed 50 characters',
            'email.unique' => 'Email is already taken',
            'username.required' => 'Username is required',
            'username.max' => 'Username must not exceed 50 characters',
            'username.unique' => 'Username is already taken',
            'address.required' => 'Address is required',
            'address.max' => 'Address must not exceed 100 characters',
            'contact.required' => 'Contact is required',
            'contact.max' => 'Contact must not exceed 12 characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password must not exceed 50 characters',
            'password.confirmed' => 'Password does not match',
            'password.regex' => 'Password must contain at least one lowercase letter, one uppercase letter, one digit, and one special character (@$!*#?&)',
            'checkbox.required' => 'Please agree to the terms and conditions',

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
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'address' => $data['address'],
            'contact' => $data['contact'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
