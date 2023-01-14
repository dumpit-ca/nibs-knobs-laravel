<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivingRoomController extends Controller
{
    public function index(){
        $livingrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'alr-design.png'],
        ];
        return view('pages.explore.livingroom', [
            'livingrooms' => $livingrooms,     
        ]);
    }
}
