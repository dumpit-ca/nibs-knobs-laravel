<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Posts;
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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createComments($id)
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
       $valid = Validator::make($request->all(), [
            'content' => 'required|string',
            'title' => 'required|string',
            'category' => 'required|string',
            'image' => 'required',
        ],
    [
            'image.required' => 'Image is required.',
			'content.required' => 'Content is required.',
            'title.required' => 'Title is required.',
    ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        }
        try {
			DB::beginTransaction();

            $destinationPath = 'uploads/posts';
            $photoExtension = $request->file('image')->getClientOriginalExtension();
            $file = 'image'.uniqid().'.'.$photoExtension;
            $request->file('image')->move($destinationPath, $file);


			$post = Posts::create([
                'user_id' => auth()->user()->id,
                'title' => $request->title,
                'content' => $request->content,
                'category' => $request->category,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

		if ($po == null)
			return redirect()
				->route('profile')
				->with('flash_info', 'Post doesn\'t exists! Please try to refresh the page.');

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
}
