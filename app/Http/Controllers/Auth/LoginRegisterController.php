<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class LoginRegisterController extends Controller
{
    //
    public static function middleware() : array
    {
        return [
            new Middleware('guest', except: ['home', 'logout']),
            new Middleware('auth', only: ['home', 'logout']),
        ];
    }

    public function register() : View
    {
        return view('auth.register');
    }

    public function store(Request $req): RedirectResponse
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:rfc,dns|max:255|unique:user,email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        $credentials = $req->only('email', 'password');
        Auth::attempt($credentials);
        $req->session()->regenerate();
        return redirect()->route('home')->withSuccess('You have successfully registered!');
    }

    public function login() : View
    {
        return view('auth.login');
    }

    public function authenticate(Request $req) : RedirectResponse
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials))
        {
            $req->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in out records.'
        ])->onlyInput('email');
    }

    public function home() : View
    {
        return view('auth.home');
    }

    public function logout(Request $req) : RedirectResponse
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('login')->withSuccess('You hav logged out successfully!');
    }
}
