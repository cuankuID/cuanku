<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Login'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'alpha', 'min:3', 'max:50'],
            'username' => ['required', 'unique:users', 'min:3', 'max:20'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)->max(20)->letters()->mixedCase()->numbers()]
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);
        
        $request->session()->flash('success', 'Registration Successful, You Can Login Now!');

        return redirect('/login');
    }
}
