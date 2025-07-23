<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthenticationController extends Controller
{
    public function login(Request $request){
        $credentials=$request->validate([
            'email' => "required",
            'password' => "required|min:5"
        ]);
        
        if(Auth::attempt($credentials)){
            echo "login sucess";
        }
        else{
            echo "login failed";
        }
       // echo $request->email;
       //echo $request->password;
    }
}
