<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;


class DashboardProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => ['required', 'max:255'],
            'username' => ['required', 'unique:users,username', 'min:3', 'max:255'],
            'email' => ['required', 'email']
        ];

        $validated = $request->validate($rules);

        User::where('id', $user->id)
            ->update($validated);
        
        return redirect('/dashboard/profile')->with('success', 'Profile has been updated!');
    }

    public function editPassword(Request $request, User $user)
    {
        return view('dashboard.profile.resetPassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()]
        ]);

        if(Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => bcrypt($request->password)]);

            return redirect('/dashboard/profile')->with('success', 'Password has been updated!');
        }
        else{
            throw ValidationException::withMessages([
                'current_password' => 'your current password does not match with our record'
            ]);
        }
    }


}
