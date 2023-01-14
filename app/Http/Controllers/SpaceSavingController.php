<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaceSavingController extends Controller
{
    public function index(){
        $spacesavings = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'ar-design.png'],
        ];
         return view('pages.explore.spacesaving', [
            'spacesavings' => $spacesavings,     
        ]);
    }
}
