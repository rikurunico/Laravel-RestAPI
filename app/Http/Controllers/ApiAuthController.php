<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
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

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //generate Token
        $token = $user->createToken('my-app-token')->plainTextToken;

        //return response json
        return new LoginResource([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        // Hapus token yang aktif
        // $request->user()->currentAccessToken()->delete();

        // Hapus semua token by user
        $request->user()->tokens()->delete();

        return response()->noContent();
    }
}
