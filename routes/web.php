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
    Route::get('/privacy', 'PageController@policy')->name('privacy');
    Route::get('/terms', 'PageController@terms')->name('terms');

    Route::middleware(['auth'])->group(function() {
        Route::get('/logout', 'UserController@logout')->name('logout');
        Route::get('/home', 'PostController@index')->name('home');
        Route::post('/home/create-post', 'PostController@store')->name('post.create');
        Route::get('/home/post/{id}', 'PostController@show')->name('post.show');
        Route::post('/comment/create/{id}', 'PostController@edit')->name('comment.create');

        Route::get('/profile', 'UserController@profile')->name('profile');
        Route::get('/profile/post/{id}', 'PostController@destroy')->name('profile.delete');
        Route::get('/profile/settings', 'UserController@edit')->name('profile.settings');

        Route::post('/profile/settings/password', 'UserController@changePassword')->name('profile.settings.password');
        Route::post('/profile/settings/update', 'UserController@update')->name('profile.settings.update');

        Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function() {
            Route::get('/dashboard', 'AdminController@index')->name('dashboard');

            Route::get('/users', 'UserController@index')->name('users');
            Route::get('/users/delete/{id}', 'UserController@destroy')->name('user.delete');
            Route::get('/users/make-admin/{id}', 'UserController@toggleAdmin')->name('user.make-admin');

            Route::get('/posts', 'AdminController@indexPost')->name('posts');

            Route::get('/posts/view/{id}', 'AdminController@showPost')->name('post.view');
            Route::get('/posts/delete/{id}', 'AdminController@destroyPost')->name('post.delete');
            Route::get('/comment/{id}', 'AdminController@destroyComment')->name('comment.delete');


            Route::get('/posts/create', 'AdminController@create')->name('create');
            Route::get('/posts/update', 'AdminController@update')->name('update');
        });
    });

