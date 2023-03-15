<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;


class PageController extends Controller
{
    // Front
     public function index(){

        $posts = Posts::orderBy('created_at', 'desc')->limit(3)->get();
         return view('pages.index',
         ['posts' => $posts]);

    }
    public function policy (){
        return view ('pages.policy');
    }
    public function terms (){
        return view ('pages.terms');
    }

}
