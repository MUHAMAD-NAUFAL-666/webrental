<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/sign-in';

    //
    public function login(Request $request)
    {
        User::where('status', 'active')->update(['status' => 'inactive']);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Auth::user()->update(['status' => 'active']);

            //role
            if (Auth::user()->role === 'customer') {
                return redirect()->route('customer.welcome');
            } elseif (Auth::user()->role === 'admin') {
                return redirect()->route('dashboard');
            }
            abort(403, 'Unauthorized access');
        }

        // Perbaikan: Pastikan menggunakan back() atau route yang konsisten
        return back()->withErrors([
            'email' => 'Email atau password yang dimasukkan tidak sesuai.',
            'password' => 'Email atau password yang dimasukkan tidak sesuai.',
        ])->withInput($request->except('password'));
    }
    public function logout(Request $request)
    {
        Auth::user()->update(['status' => 'inactive']);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Anda telah logout.');
    }
}
