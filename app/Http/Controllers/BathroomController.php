<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BathroomController extends Controller
{
    public function index(){
        $bathrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'db-design.png'],
        ];
         return view('pages.explore.bathroom', [
            'bathrooms' => $bathrooms,     
        ]);
    }
    
}
