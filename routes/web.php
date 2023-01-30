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
    Route::get('/home/post/{id}', 'PostController@show')->name('post.show');
    Route::post('/comment/create/{id}', 'PostController@edit')->name('comment.create');

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/profile/post/{id}', 'PostController@destroy')->name('post.delete');
    Route::get('/profile/settings', 'UserController@edit')->name('profile.settings');
    Route::post('/profile/settings/update', 'UserController@update')->name('profile.settings.update');

    Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
        Route::get('/dashboard', 'AdminController@index')->name('dashboard');

        Route::get('/users', 'UserController@index')->name('users');

        Route::get('/posts', 'AdminController@indexPost')->name('posts');


        Route::get('/posts/view/{id}', 'AdminController@showPost')->name('post.view');
        Route::get('/posts/delete/{id}', 'AdminController@destroyPost')->name('post.delete');
        Route::get('/comment/{id}', 'AdminController@destroyComment')->name('comment.delete');


        Route::get('/posts/create', 'AdminController@create')->name('create');
        Route::get('/posts/update', 'AdminController@update')->name('update');
    });
});

