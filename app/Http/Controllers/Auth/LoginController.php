<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $email = $credentials['email'];
        $password = $credentials['password'];

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed, Check your email or password!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        return redirect('/login');
    }

    public function googleAuth() {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback() {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            $explodedEmail = explode("@", $google_user->getEmail());
            $username = User::where('username', $explodedEmail[0])->first() ;

            if($username){
                $username = $explodedEmail[0] . '_' . rand(10, 99);
            } else {
                $username = $explodedEmail[0];
            }

            if(!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'username' => $username,
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'avatar' => $google_user->getAvatar(),
                    'email_verified_at' => Carbon::now()
                ]);

                Auth::login($new_user);

                return redirect()->intended('/dashboard');
            } else {
                Auth::login($user);

                return redirect()->intended('/dashboard');
            }
        } catch(\Throwable $throw) {
            return $throw->getMessage();
        }
    }
}
