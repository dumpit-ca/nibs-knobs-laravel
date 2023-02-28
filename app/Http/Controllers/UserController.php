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
		$user = User::get();
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
		$user = User::find(Auth::user()->id);
		return view('pages.settings', [
			'auth' => $user
		]);
	}

	protected function update(Request $req) {

		$validator = Validator::make($req->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
			'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
			'username' => 'required|min:2',
			'email' => 'required|email',
            'address' => 'required|min:2',
            'contact' => 'required|min:2',
		], [
            'image.image' => 'Image is not a valid image.',
            'image.mimes' => 'Only upload JPG, PNG and SVG files.',
            'image.max' => 'Image is too large.',
            'first_name.required' => 'First name is required',
            'first_name.min' => 'First name is short',
            'last_name.required' => 'Last name is required',
            'last_name.min' => 'Last name is short',
			'username.required' => 'Username is required',
			'username.min' => 'Username is short',
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
        }else{
            $user = User::find(Auth::user()->id);

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

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

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
        $po = User::find($id);

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
        $po = User::find($id);

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
