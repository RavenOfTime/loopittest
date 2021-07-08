<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function Login(Request $request)
    {
        $credentials = request(["email", "password"]);
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'loggedin' => false
            ]);
        } else {
            return response()->json([
                'loggedin' => true
            ]);
        }
    }
}
