<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //return contact page
    public function index(){
        return view('pages.contact');
    } 
}
