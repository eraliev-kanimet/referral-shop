<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json([
            'user' => new UserResource($user),
            'token' => $user->createToken('kanimet')->accessToken,
        ]);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            $user = Auth::user();

            return response()->json([
                'user' => new UserResource($user),
                'token' => $user->createToken('kanimet')->accessToken,
            ]);
        }

        return response()->json(['errors' => [
            'email' => [__('common.unauthorised')],
            'password' => [__('common.unauthorised')],
        ]], 401);
    }
}
