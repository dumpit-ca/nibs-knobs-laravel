<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Posts;
use App\Comment;
use App\User;
use Session;
use Validator;
use Hash;
use Log;
use DB;

class AdminController extends Controller
{



    public function create(){
        return view ('pages.admin.users.create');
    }
    public function update(){
        return view ('pages.admin.users.update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = [
            'users' => Users::where('type', 'guest')->count(),
            'posts' => Posts::count(),
            'comments' => Comments::count()
        ];
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
        return view ('pages.admin.dashboard', [
            'total' => $total,
            'posts' => $posts
        ]);
    }

    public function indexPost() {
        $posts = Posts::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.posts.posts', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPost($id)
    {
        $post = Posts::find($id);
        $comments = Posts::where('post_id', $id)->get();
        return view ('pages.admin.posts.view', [
            'post' => $post,
            'comments' => $comments
        ]);
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
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyComment($id)
    {
        $po = Comments::find($id);

            if ($po == null){
                return redirect()
                ->back()
                ->with('flash_info', 'Comment doesn\'t exists! Please try to refresh the page.');

            }

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

        return redirect()->back()->with('flash_success', 'Post deleted successfully!');



    }

    public function destroyPost($id){
        $po = Posts::find($id);


            if ($po == null)
                return redirect()
                    ->route('posts')
                    ->with('flash_info', 'Post doesn\'t exists! Please try to refresh the page.');

            try {
                DB::beginTransaction();

                $po->delete();

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                Log::error($e);

                return redirect()
                    ->route('posts')
                    ->with('flash_error', 'Something went wrong, please try again later.');
            }

        return redirect()->route('posts')->with('flash_success', 'Post deleted successfully!');



    }
}
