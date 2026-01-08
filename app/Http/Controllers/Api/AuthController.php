<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

        $user = \App\Models\User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password']),
        ]);

        return response()->json([
            'token'=>$user->createToken('api')->plainTextToken
        ],201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email','password'))) {
            return response()->json(['message'=>'Unauthorized'],401);
        }

        return response()->json([
            'token'=>Auth::user()->createToken('api')->plainTextToken
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message'=>'Logged out']);
    }
}
