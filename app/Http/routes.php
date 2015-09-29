<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Check if user is logged in for viewing individual posts to avoid unwanted editting / deleting.
Route::get('post/{id}', ['middleware' => 'auth', 'uses' => 'postsController@show']);

// Route::filter('auth', function()
// {
//     if (Auth::user()) return Redirect::guest('login');
// });

Route::get('/', function () {
    return view('welcome');
});


Route::resource('user', 'UserController');

Route::resource('post', 'postsController');