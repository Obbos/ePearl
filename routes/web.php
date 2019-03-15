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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('layouts.master');
});

//registration route
Route::get('register', function()
{
    return view('auth.register');
});

//sign route
Route::get('/signin',[
 'uses' => 'UserController@getSignin',
 'as' => 'auth.signin'
]);

//sign route
Route::post('/signin',[
 'uses' => 'UserController@postSignin',
 'as' => 'auth.signin'
]);

