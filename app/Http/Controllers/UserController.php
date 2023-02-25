<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Rules\MatchOldPassword;
use App\User;
use App\Posts;
use Session;
use Hash;
use Validator;
use Log;
use DB;

class UserController extends Controller
{

    protected function login() {
		if (!Auth::check())
		     return view('auth.login');
		else
			return redirect()->route('/home');
	}

    // protected function login() {
	// 	if (!Auth::check())
	// 		return view('login');
	// 	elseif(Auth::check())
	// 		return redirect('admin/dashboard');
	// 	else
	// 		return redirect()->back();
	// }
    protected function create(Request $req) {
		return view('admin.users.create');
	}

    public function authenticate(Request $req)
    {

        $validator = Validator::make($req->all(), [
			'email' => 'required|email|string|max:255',
            'password' => 'required|min:8|string',
		],[
            'email.required' => 'Email is required.',
            'email.email' => 'Email is invalid.',
            'email.regex' => 'Email is invalid in format.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
        ]);

		if ($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        $credentials = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(!Auth::attempt($credentials))
        {
            auth()->logout();
            Session::flash('flash_error','Wrong username/password!');

            return redirect()->back();
        }

        $user = Auth::user();

        Session::flash('flash_message','Logged in!');

        return redirect()
            ->route('home')
            ->with('flash_message', 'Logged in!');
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

	protected function index() {
		$user =DB::table('users')->get();
        return view ('pages.admin.users.users',[
			'users' => $user
		]);

    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	protected function edit() {
		$user = Users::find(Auth::user()->id);
		return view('pages.settings', [
			'auth' => $user
		]);
	}

	protected function update(Request $req) {

		$validator = Validator::make($req->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
			'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
			'username' => 'required|min:2|max:50',
			'email' => 'required|email|max:50',
            'address' => 'required|min:2|max:100',
            'contact' => 'required|min:2|max:50',
		], [
            'image.image' => 'Image is not a valid image.',
            'image.mimes' => 'Only upload JPG, PNG and SVG files.',
            'image.max' => 'Image is too large.',
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name is short',
            'first_name.max' => 'First name is too long',
            'last_name.required' => 'Last name is required',
            'last_name.min' => 'Last name is short',
            'last_name.max' => 'Last name is too long',
			'username.required' => 'Username is required',
			'username.min' => 'Username is short',
            'username.max' => 'Username is too long',
			'email.required' => 'E-mail is required.',
			'email.email' => 'E-mail provided is not a valid e-mail.',
            'email.max' => 'E-mail is too long.',
            'address.required' => 'Address is required',
            'address.min' => 'Address is short',
            'address.max' => 'Address is too long',
            'contact.required' => 'Contact is required',
            'contact.min' => 'Contact is short',
            'contact.max' => 'Contact is too long',
		]);

		if ($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }



        $user = Users::find(Auth::user()->id);

        if($user->username != $req->input('username')){
            $validator = Validator::make($req->all(), [
                'username' => 'unique:users',
            ], [
                'username.unique' => 'Username already exists.',
            ]);

            if ($validator->fails()){
                return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
            }
        }



		try {
			DB::beginTransaction();

            $user->first_name = $req->input('first_name');
            $user->last_name = $req->input('last_name');
            if($user->username != $req->input('username')){
             $user->username = $req->input('username');
            }
            $user->email = $req->input('email');
            $user->address = $req->input('address');
            $user->contact = $req->input('contact');
            $user->bio = $req->input('bio');


            if($req->hasFile('image')){
                $destinationPath = 'uploads/user';
                $photoExtension = $req->file('image')->getClientOriginalExtension();
                $file = 'image'.uniqid().'.'.$photoExtension;
                $req->file('image')->move($destinationPath, $file);

                $user->image = $file;
            }

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
			->route('profile.settings');
	}

    public function changePassword(Request $request){

        $validator = Validator::make($request->all(), [
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],

		], [
            'current_password.required' => 'Current password is required',
            'current_password.match' => 'Current password does not match',
            'new_password.required' => 'New password is required',
            'new_confirm_password.same' => 'New password and confirm password does not match',
		]);


        if ($validator->fails()){
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }


      try{
        DB::beginTransaction();

        Users::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        DB::commit();
      }catch(\Exception $e){
        Log::error($e);
        DB::rollback();

        return redirect()
            ->back()
            ->with('flash_error', 'Something went wrong, please try again later.');


    }
    return redirect()
			->route('profile.settings');

}

      public function profile(){
        $user = Auth::user();
        $posts = Posts::where('user_id', $user->id)->get();
         return view('pages.profile',
         ['user' => $user, 'posts' => $posts]);
     }


     public function destroy($id)
    {
        $po = Users::find($id);

            if ($po == null)
                return redirect()
                    ->back()
                    ->with('flash_info', 'User doesn\'t exists! Please try to refresh the page.');

            try {
                DB::beginTransaction();

                $po->delete();

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                Log::error($e);

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }

        return redirect()->route('users')->with('flash_success', 'User deleted successfully!');


    }

    public function toggleAdmin($id)
    {
        $po = Users::find($id);

            if ($po == null)
                return redirect()
                    ->back()
                    ->with('flash_info', 'User doesn\'t exists! Please try to refresh the page.');

            try {
                DB::beginTransaction();

                $init = $po->type;
                $changeto = $init == 'admin' ? 'user' : 'admin';

                $po->type = $changeto;

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                Log::error($e);

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }

        return redirect()->route('users')->with('flash_success', 'Changed to admin successfully!');


    }


}
