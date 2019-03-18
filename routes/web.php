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
    return view('authe.register');
});

//sign route
Route::get('/register',[
 'uses' => 'UserController@getRegister',
 'as' => 'authe.register'
]);

//sign route
Route::post('/register',[
 'uses' => 'UserController@postRegister',
 'as' => 'authe.register'
]);
