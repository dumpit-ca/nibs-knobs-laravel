<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    //
    public function index(){
         $kitchens = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'wck-design.png']
        ];
         return view('pages.explore.kitchen', [
            'kitchens' => $kitchens,     
        ]);
    }
}
