<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            //get user info
            $user = User::where('email', $request->email)->first();
            //generate Token
            $token = $user->createToken('my-app-token')->plainTextToken;
            //return response json
            return new LoginResource([
                'token' => $token,
                'user' => $user,
            ]);
        } else {
            return response()->json([
                'message' => 'Data yang di masukkan salah'
            ], 401);
        }
    }

    public function register(Request $request)
    {
        # code..
    }

    public function logout(Request $request)
    {
        # code..
    }
}
