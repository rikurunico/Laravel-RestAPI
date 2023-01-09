<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function login(LoginRequest $request)
    {

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 401);
        }

        //generate Token
        $token = $user->createToken('my-app-token')->plainTextToken;

        //return response json
        return new LoginResource([
            'token' => $token,
            'user' => $user,
        ]);
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
