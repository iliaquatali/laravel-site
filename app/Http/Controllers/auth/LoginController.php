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
        if($request->email == 'liaquat@gmail.com' && $request->password == '12345'){
            return redirect()->Route('dashboard');
        }
    else
    {
      return "<h1>Invalid email and Password.</h1>";
    }
}
}