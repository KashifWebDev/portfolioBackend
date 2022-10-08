<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\IPLoggerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(LoginRequest $request){
        $success = false;
        $user= User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'success' => false,
                'user' => array(),
                'message' => ['These credentials do not match our records.']
            ], 200);
        }

        $token = $user->createToken('authToken')->plainTextToken;

        return response([
            'success' => true,
            'user' => new UserResource($user),
            'token' => $token
        ]);
    }
}
