<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Rfc4122\Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $user = User::create([
            'email' => $request->Email,
            'password' => bcrypt($request->Password),
        ]);

        $token = $user->createToken('token')->accessToken;

        return response(['token' => $token], 200);
    }

//не работает
//    public function login(Request $request)
//    {
//
//        if (Auth::attempt(['email' => $request->Email, 'password' => $request->Password])) {
//            $user = Auth::user();
//            $token = $user->createToken('token')->accessToken;
//
//            return response(['token' => $token], 200);
//        } else {
//            return response(['errors' => ['Invalid credentials']], 422);
//        }
//    }


    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response(['message' => 'Successfully logged out'], 200);
    }
}
