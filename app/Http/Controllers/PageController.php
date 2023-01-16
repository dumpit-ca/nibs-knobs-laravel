<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // home page
     public function index(){
       return view('pages.index');
    }
    public function dashboard(){
        return view ('pages.admin.dashboard');
    }
    public function contact(){
        return view ('pages.contact');
    }
}
