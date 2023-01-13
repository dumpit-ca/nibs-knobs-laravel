<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
     //return gallery page
    public function index(){
        $kitchens = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
        ];
         $bedrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
        ];
        $livingrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
        ];
        $bathrooms = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
        ];
        $spacesavings = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'home-1.png'],
        ];
        return view('pages.explore.gallery', [
            'kitchens' => $kitchens,
            'bedrooms' => $bedrooms,
            'livingrooms' => $livingrooms,
            'bathrooms' => $bathrooms,
            'spacesavings' => $spacesavings,       
            ]);

    }
}
