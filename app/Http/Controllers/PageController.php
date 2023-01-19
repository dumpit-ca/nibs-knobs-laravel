<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Front
     public function index(){
       return view('pages.index');
    }
    public function posts(){
        return view('pages.posts');
    }
    // Admin
    public function dashboard(){
        return view ('pages.admin.dashboard');
    }

}
