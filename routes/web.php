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
Route::get('/gallery', 'PageController@GalleryIndex')->name('gallery');
Route::get('/gallery/kitchen', 'PageController@KitchenIndex')->name('kitchen');
Route::get('/gallery/bedroom', 'PageController@BedroomIndex')->name('bedroom');
Route::get('/gallery/living-room', 'PageController@LivingRoomIndex')->name('livingroom');
Route::get('/gallery/bathroom', 'PageController@BathroomIndex')->name('bathroom');
Route::get('/gallery/space-saving', 'PageController@SpaceSavingIndex')->name('spacesaving');
Route::get('/gallery/home-office', 'PageController@HomeOfficeIndex')->name('homeoffice');




Route::group(['middleware' => 'auth'], function() {
    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::get('/home', 'UserController@posts')->name('home');
    Route::post('/home/create-post', 'PostController@store')->name('post.create');

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/profile/settings', 'UserController@settings')->name('profile.settings');

    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
        Route::get('/dashboard', 'PageController@dashboard')->name('dashboard');

        Route::get('/users', 'PageController@users')->name('users');

        Route::get('/posts', 'PageController@AdminPosts')->name('posts');
        Route::get('/posts/view', 'PageController@ViewPosts')->name('view');
        Route::get('/posts/create', 'PageController@create')->name('create');
        Route::get('/posts/update', 'PageController@update')->name('update');
    });
});

