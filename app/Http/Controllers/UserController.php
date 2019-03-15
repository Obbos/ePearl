<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getSignin(){

    	return view('auth.signin');
    }

    public function postSignin(Request $request){

    	$this->validate($request,[
         'email' => 'email|required|unique:users',
          'password' => 'required|min:4'
    	]);

    	$user = new User([
         'email' => $request->input('email'),
         'password' => bcrpt($request->input('password'))
    	]);

    	$user->save();

    	return redirect()->route('auth.profile');
    }
}
