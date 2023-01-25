<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth
Auth::routes();


// Front
Route::get('/', 'PageController@index')->name('index');
Route::get('/posts', 'PageController@posts')->name('posts');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/profile/settings', 'PageController@settings')->name('settings');
Route::get('/gallery', 'PageController@GalleryIndex')->name('gallery');
Route::get('/gallery/kitchen', 'PageController@KitchenIndex')->name('kitchen');
Route::get('/gallery/bedroom', 'PageController@BedroomIndex')->name('bedroom');
Route::get('/gallery/living-room', 'PageController@LivingRoomIndex')->name('livingroom');
Route::get('/gallery/bathroom', 'PageController@BathroomIndex')->name('bathroom');
Route::get('/gallery/space-saving', 'PageController@SpaceSavingIndex')->name('spacesaving');
Route::get('/gallery/home-office', 'PageController@HomeOfficeIndex')->name('homeoffice');




Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', 'UserController@logout')->name('logout');


    Route::get('/home', 'PageController@posts')->name('home');


    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
        Route::get('/dashboard', 'PageController@dashboard')->name('admin.home');
    });
});
