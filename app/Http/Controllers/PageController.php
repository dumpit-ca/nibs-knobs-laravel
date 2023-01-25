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
     public function profile(){
        return view('pages.profile');
    }
    public function settings(){
        return view ('pages.settings');
    }
    // Admin
    public function dashboard(){
        return view ('pages.admin.dashboard');
    }
    public function users(){
        return view ('pages.admin.users');
    }

}
