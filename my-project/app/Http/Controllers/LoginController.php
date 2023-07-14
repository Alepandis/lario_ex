<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if( !Auth::attempt($credentials) ) {
            return response([
                "message" => "Usuario y/o contraseña es invalido."
            ], 401);
        }

        $accessToken = Auth::user()->createToken('authTestToken')->accessToken;

        return response([
            "user" => Auth::user(),
            "access_token" => $accessToken
        ]);
    }
}
