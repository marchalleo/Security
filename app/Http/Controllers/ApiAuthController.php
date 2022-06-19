<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{

    public function register(Request $request): JsonResponse {
        $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = new User([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user->save();
        return response()->json([
            'id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'email' => $user->email,
            'token' => $user->createToken(time())->plainTextToken,
        ]);
    }

    public function login(Request $request): JsonResponse {
        $user = User::where('email', $request->email)->first();
        $password = User::where('password', $request->password)->first();

        if ($user && $password){
            return response()->json([
                'id' => $user->id,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'email' => $user->email,
                'password' => $user->password,
                'token' => $user->createToken(time())->plainTextToken,
            ]);
        }
        else {
            return response()->json(
                "$request->email n'existe pas dans la base de donnees, essayez plutot leo@gmail.com.",
            );
        }
    }
}
