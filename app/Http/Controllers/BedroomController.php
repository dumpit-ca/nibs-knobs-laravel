<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BedroomController extends Controller
{
    //
    public function index(){
        $bedrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ffb-design.png'],
        ];
        return view('pages.explore.bedroom', [
            'bedrooms' => $bedrooms,     
        ]);
    }
    
}
