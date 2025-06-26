<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect() 
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback() 
    {
        try {
            $socialUser = Socialite::driver('google')->user();
            
            $registeredUser = User::where("google_id", $socialUser->id)->first();
            
            if (!$registeredUser) {
                $user = User::create([
                    'google_id' => $socialUser->id,
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                    'password' => bcrypt('password'),
                    'google_token' => $socialUser->token,
                    'google_refresh_token' => $socialUser->refreshToken,
                    'email_verified_at' => now(),
                    'role' => 'customer' // Set the role explicitly to admin
                ]);
                Auth::login($user);
                return redirect('/dashboard'); // Direct to dashboard since it's an admin
            }
            
            // For existing users, keep the same logic:
            Auth::login($registeredUser);
            return $registeredUser->role === 'customer' ? redirect('/welcome') : redirect('/dashboard');

            
        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Google login failed');
        }
    }
    }
    
