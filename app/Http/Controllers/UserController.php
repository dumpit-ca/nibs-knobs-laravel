<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use Session;
use Validator;
use Hash;
use Log;
use DB;

class UserController extends Controller
{
    //
    protected function login() {
		if (!Auth::check())
			return view('login');
		else
			return redirect()->route('/');
	}


	protected function logout() {
		if (Auth::check()) {
			auth()->logout();
			return redirect('/')->with('flash_success', 'Logged out!');
		}
	}

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	protected function edit() {
		$user = User::find(Auth::user()->id);
		return view('account.edit', [
			'user' => $user
		]);
	}

	protected function update(Request $req, $id) {

		$validator = Validator::make($req->all(), [
			'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
			'username' => 'required|unique:users|min:2',
			'email' => 'required|email',
            'address' => 'required|min:2',
            'contact' => 'required|min:2',
		], [
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name is short',
            'last_name.required' => 'Last name is required',
            'last_name.min' => 'Last name is short',
			'username.required' => 'Username is required',
			'username.min' => 'Username is short',
            'username.unique' => 'Username is already taken',
			'email.required' => 'E-mail is required.',
			'email.email' => 'E-mail provided is not a valid e-mail.',
            'address.required' => 'Address is required',
            'address.min' => 'Address is short',
            'contact.required' => 'Contact is required',
            'contact.min' => 'Contact is short',
		]);

		if ($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

		try {
			DB::beginTransaction();

			$user = User::find($id);
            $user->first_name = $req->input('first_name');
            $user->last_name = $req->input('last_name');
            $user->username = $req->input('username');
            $user->email = $req->input('email');
            $user->address = $req->input('address');
            $user->contact = $req->input('contact');
			$user->save();

			DB::commit();
		} catch (\Exception $e) {
			Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_error', 'Something went wrong, please try again later.');
		}

		return redirect()
			->route('account.edit');
	}


}
