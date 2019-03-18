<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function getRegister()
    {
    	return view('authe.register');
    }

    public function postRegister(Request $request)
    {
      $this->validate($request,[
          
          'name' => 'name|required|unique:user',
          'email' => 'email|required|unique:user',
          'password' => 'required|min:4'
      ]);

      $user = new User([

         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'password' => bcrypt($request->input('password'))
      ]);

      $user->save();

      return redirect()->route('partials.navigation');
    }
}
