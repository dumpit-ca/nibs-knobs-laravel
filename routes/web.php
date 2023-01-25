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

// Front
Route::get('/home', 'PageController@index')->name('home');
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/posts', 'PageController@posts')->name('posts');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/profile/settings', 'PageController@settings')->name('settings');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/gallery/kitchen', 'KitchenController@index')->name('kitchen');
Route::get('/gallery/bedroom', 'BedroomController@index')->name('bedroom');
Route::get('/gallery/living-room', 'LivingRoomController@index')->name('livingroom');
Route::get('/gallery/bathroom', 'BathroomController@index')->name('bathroom');
Route::get('/gallery/space-saving', 'SpaceSavingController@index')->name('spacesaving');
Route::get('/gallery/home-office', 'HomeOfficeController@index')->name('homeoffice');


// Auth
Auth::routes();


// Admin
Route::get('/admin', function () {
    return redirect('/dashboard');
});
Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');
Route::get('/admin/users', 'PageController@users')->name('users');
