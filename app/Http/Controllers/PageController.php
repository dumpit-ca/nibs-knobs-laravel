<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Front
     public function index(){
       return view('pages.index');
    }
    public function posts(){
        return view('pages.posts');
    }
     public function profile(){
        return view('pages.profile');
    }
    public function settings(){
        return view ('pages.settings');
    }


    public function GalleryIndex(){
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
        $homeoffices = [
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
            'homeoffices'=>$homeoffices
            ]);

    }

    public function LivingRoomIndex(){
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

        public function KitchenIndex(){
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

       public function HomeOfficeIndex(){
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
   public function BathroomIndex(){
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
public function BedroomIndex(){
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

public function SpaceSavingIndex(){
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
