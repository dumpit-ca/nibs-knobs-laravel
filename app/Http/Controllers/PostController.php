<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Posts;
use App\Comment;
use Session;
use Validator;
use Hash;
use Log;
use DB;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $user = Auth::user();
            $posts = Posts::orderBy('created_at', 'desc')->paginate(10);
             return view('pages.posts',
             ['user' => $user, 'posts' => $posts]);
    }


    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData;
       $rules = [
            'content' => 'required|string',
            'title' => 'required|string|max:100',
            // 'category' => 'required|string|regex:/(^Bedroom$)|(^Kitchen$)|(^Living Room$)|(^Bathroom$)|(^Space Saving$)|(^Home Office$)/',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
        ];

        try{
            $validatedData = $this->validate($request, $rules);
            Log::info('validated data');

        }catch(ValidationException $exception){
            return redirect()
            ->back()
            ->withErrors($exception->errors())
            ->withInput();
        }


            try {
                DB::beginTransaction();

                $img = $validatedData['image'];
                $destinationPath = 'uploads/posts';
                $photoExtension =  $img->extension();
                $file = $img->hashName().'.'.$photoExtension;
                $img->move($destinationPath, $file);


                Posts::create([
                    'user_id' => auth()->user()->id,
                    'title' => $validatedData['title'],
                    'content' => $validatedData['content'],
                    'category' => $validatedData['category'],
                    'image' => $file,
                ]);

                DB::commit();
            } catch (\Exception $e) {
                Log::error($e);
                DB::rollback();

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }

            return redirect()->route('home');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        $user = Auth::user();
        $comments = Comment::where('post_id', $id)->get();
        return view('pages.public.viewpost', compact('user', 'post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $rules = [
            'content' => 'required|string|max:255'
        ];
        $validatedData;
        try{
            $validatedData = $this->validate($request, $rules);

        }catch(ValidationException $exception){
            return redirect()
            ->back()
            ->withErrors($exception->errors())
            ->withInput();
        }
            try {
                DB::beginTransaction();

                Comment::create([
                    'user_id' => auth()->user()->id,
                    'post_id' => $id,
                    'content' => $validatedData['content'],
                ]);

                DB::commit();
            } catch (\Exception $e) {
                Log::error($e);
                DB::rollback();

                return redirect()
                    ->back()
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }

            return redirect()->route('post.show', ['id' => $id]);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $po = Posts::find($id);

        if(!Auth::check()){
            return redirect()->route('login');
        }else if(Auth::user()->id == $po->user_id){

            if ($po == null){
                return redirect()
                ->route('profile')
                ->with('flash_info', 'Post doesn\'t exists! Please try to refresh the page.');
            }else{
                try {
                    DB::beginTransaction();

                    $po->delete();

                    DB::commit();
                } catch (Exception $e) {
                    DB::rollback();
                    Log::error($e);

                    return redirect()
                        ->route('profile')
                        ->with('flash_error', 'Something went wrong, please try again later.');
                }

            return redirect()->route('profile')->with('flash_success', 'Post deleted successfully!');
            }

        }else{
            return redirect()->route('profile')->with('flash_error', 'Please refrain from modifying this page.');
        }


    }
}
