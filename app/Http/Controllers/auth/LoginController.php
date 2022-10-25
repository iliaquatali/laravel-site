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
        if($request->email == 'admin@demo.com' && $request->password == '111'){
            session([
                'admin' => 1,
            ]);
            return redirect()->Route('show')->with('success', 'You have successfully Logged In.');
        }
        elseif($request->email == 'user@demo.com' && $request->password == '111'){
            session([
                'user' => 1,
            ]);
            return redirect()->Route('posts.index')->with('success', 'You have successfully Logged In.');
        }
    else
    {   
      return redirect()->Route('login');
    }
}

}