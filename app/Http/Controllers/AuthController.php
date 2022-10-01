<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return User::with('infoConsultant')->where("id", auth()->user()->id)->get();
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed','max:20', Password::min(8)->letters()->mixedCase()->numbers()],
            'nik' => ['required', 'integer', 'unique:users'],
            'address' => ['required'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }
        User::Create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return response()->json(['message' => 'User Registered Successfully']);
    }

    public function change(Request $request)
    {
        $user = auth()->user();
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'min:3', 'max:50'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed','max:20', Password::min(8)->letters()->mixedCase()->numbers()],
            'nik' => ['required', 'integer', 'unique:users'],
            'address' => ['required'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->getMessageBag());
        }
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nik' => $request->nik,
            'address' => $request->address,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);
        return response()->json(['message' => 'User Updated Successfully']);
    }
}