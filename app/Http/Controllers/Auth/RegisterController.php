<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

use Ramsey\Uuid\Uuid;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'alpha', 'min:3', 'max:50'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed','max:20', Password::min(8)->letters()->mixedCase()->numbers()]
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        event(new Registered($user));

        return redirect('/email/verify');
    }
}
