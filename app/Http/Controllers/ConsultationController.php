<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    //return consult page
    public function index(){
        return view('pages.consult');
    } 
}
