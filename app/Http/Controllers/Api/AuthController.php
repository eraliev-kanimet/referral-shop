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
        $user = User::create($request->all());

        Auth::login($user);

        return new UserResource(Auth::user());
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->all())) {
            return new UserResource(Auth::user());
        }

        return response()->json(['error' => 'Unauthorised'], 401);
    }
}
