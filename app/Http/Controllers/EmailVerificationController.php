<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
    public function index()
    {
        return view('register.verify-email');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('success', 'Verification link sent!');    
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        Auth::logout();

        return redirect('/login');    
    }
}
