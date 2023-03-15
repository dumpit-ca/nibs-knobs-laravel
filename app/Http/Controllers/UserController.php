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

        $validatedData;
        $rules = [
            '_token' => 'required|alpha_num|max:50|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
			'first_name' => 'required|string|min:2|max:50',
            'last_name' => 'required|string|min:2|max:50',
			'username' => 'required|string|min:2|max:50',
			'email' => 'required|email:rfc,dns|max:50',
            'address' => 'required|string|min:2|max:100',
            'contact' => 'required|string|min:2|max:12',
            'bio' => 'max:100',
		];
        $rulesInfo = [
            '_token.required' => 'Please refrain from modifying the form data.',
            '_token.alpha_num' => 'Please refrain from modifying the form data.',
            '_token.max' => 'Please refrain from modifying the form data.',
            'image.image' => 'Please upload a valid image.',
            'image.mimes' => 'Please upload a valid jpg, png, jpg, bmp or svg image.',
            'image.max' => 'Please upload an image less than 2MB.',
            'first_name.required' => 'Please enter your first name.',
            'first_name.min' => 'Please enter a valid first name.',
            'first_name.max' => 'First name should be within 50 characters.',
            'last_name.required' => 'Please enter your last name.',
            'last_name.min' => 'Please enter a valid last name.',
            'last_name.max' => 'Last name should be within 50 characters.',
            'username.required' => 'Please enter your username.',
            'username.min' => 'Please enter a valid username. ',
            'username.max' => 'Username should be within 50 characters.',
            'email.required' => 'Please enter your email.',
            'email.email' => 'Please enter a valid email.',
            'email.max' => 'Email should be within 50 characters.',
            'address.required' => 'Please enter your address.',
            'address.min' => 'Please enter a valid address.',
            'address.max' => 'Address should be within 100 characters.',
            'contact.required' => 'Please enter your contact number.',
            'contact.min' => 'Please enter a valid contact number.',
            'contact.max' => 'Contact number should be within 12 characters.',
            'bio.max' => 'Bio should be within 100 characters.',

        ];

        $usernameRules= [
            'username' => 'unique:users',
        ];

        try{
            $validatedData = $this->validate($req, $rules, $rulesInfo);

        }catch(ValidationException $exception){
            Log::error($exception->errors());
            return redirect()
            ->back()
            ->withErrors($exception->errors())
            ->withInput();
        }

        try{
            $validatedUsername = $this->validate($req, $rules, ['username.unique' => 'Username already exists.']);

        }catch(ValidationException $exception){
            Log::error($exception->errors());
            return redirect()
            ->back()
            ->withErrors($exception->errors())
            ->withInput();
        }

            try {
                DB::beginTransaction();
                $user = User::find(Auth::user()->id);

                if($req->hasFile('image')){

                    $img = $validatedData['image'];
                    $destinationPath = 'uploads/user';
                    $photoExtension =  $img->extension();
                    $file = $img->hashName().'.'.$photoExtension;
                    $img->move($destinationPath, $file);

                    User::where('id', Auth::user()->id)->update([
                        'image' => $file,
                    ]);

                }

                $username = '';
                if($user->username != $req->username){
                    $username = $validatedData['username'];
                }else{
                    $username = $user->username;
                }

                User::where('id', Auth::user()->id)
                ->update([
                    'first_name' => $validatedData['first_name'],
                    'last_name' => $validatedData['last_name'],
                    'username' => $username,
                    'email' => $validatedData['email'],
                    'address' => $validatedData['address'],
                    'contact' => $validatedData['contact'],
                    'bio' => $validatedData['bio']
                ]);


                DB::commit();
            } catch (\Exception $e) {
                Log::error($e);
                DB::rollback();

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');

            }

            return redirect()
                ->route('profile.settings')
                ->with('flash_success', 'Updated Information.');
        }






    public function changePassword(Request $request){

        $validatesInfo = [
            '_token.required' => 'Please refrain from modifying the form data.',
            '_token.alpha_num' => 'Please refrain from modifying the form data.',
            '_token.max' => 'Please refrain from modifying the form data.',
            'current_password.required' => 'Current password is required',
            'current_password.min' => 'Current password must be at least 8 characters',
            'current_password.max' => 'Current password must not exceed 50 characters',
            'new_password.required' => 'New password is required',
            'new_password.confirmed' => 'New password does not match',
            'new_password.regex' => 'Password must contain at least one lowercase, one uppercase, one number, and one special character',
            'new_confirm_password.required' => 'Confirm password is required',
            'new_confirm_password.same' => 'Confirm password does not match',
        ];

        $rules = [
            '_token' => 'required|alpha_num|max:50|string',
            'current_password' => ['required', 'min:8', 'max:50', 'string', new MatchOldPassword],
            'new_password' => ['required', 'string', 'min:8', 'max:50', 'confirmed',  'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!*#?&]/'],
            'new_confirm_password' => ['same:new_password', 'required', 'string', 'min:8', 'max:50', 'confirmed',  'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!*#?&]/'],
		];

        try{
            $validatedData = $this->validate($request, $rules, $validatesInfo);
            Log::info('validated data');

        }catch(ValidationException $exception){
            return redirect()
            ->back()
            ->withErrors($exception->errors())
            ->withInput();
        }


            try{
                DB::beginTransaction();

                User::find(auth()->user()->id)->update(['password'=> Hash::make($validatedData['new_password'])]);

                DB::commit();
              }catch(\Exception $e){
                Log::error($e);
                DB::rollback();

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }
            user()->logout();
            return redirect()
                    ->route('login')
                    ->with('flash_success', 'Updated Information.');





}

      public function profile(){
        $user = Auth::user();
        $posts = Posts::where('user_id', $user->id)->orderBy('created_at', 'desc')->paginate(10);
         return view('pages.profile',
         ['user' => $user, 'posts' => $posts]);
     }


     public function destroy($id)
    {
        $po = User::find($id);

            if ($po == null){
                return redirect()
                ->back()
                ->with('flash_info', 'User doesn\'t exists! Please try to refresh the page.');
            }else{
                try {
                    DB::beginTransaction();

                    $po->delete();

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();


                    return redirect()
                        ->back()
                        ->with('flash_error', 'Something went wrong, please try again later.');
                }

            return redirect()->route('users')->with('flash_success', 'User deleted successfully!');
            }





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
                $changeto = $init == 'admin' ? 'guest' : 'admin';

                User::where('id', $id)
                ->update([
                    'type' => $changeto
                ]);

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
