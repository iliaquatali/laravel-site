<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('auth.login');
        
    }

    public function checklogin(Request $request)
    {
        $request->validate([

            'email' => 'required|email|unique:users',
            'password' => 'required',

        ]);
        if($request->email == 'liaquat@gmail.com' && $request->password == '111'){
            return redirect()->Route('show')->with('success', 'You have successfully Logged In.');
        }
    else
    {   
      return view('auth.log');
    }
}
}