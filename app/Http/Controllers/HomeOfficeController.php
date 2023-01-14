<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeOfficeController extends Controller
{
   public function index(){
        $homeoffices = [
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
            ['name' => 'room-name 1', 'dimensions' => '18 x 21', 'image' => 'mo-design.png'],
        ];
         return view('pages.explore.homeoffice', [
            'homeoffices' => $homeoffices,     
        ]);
   }
   
}
