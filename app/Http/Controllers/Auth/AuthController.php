<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    private $max_attempts = 3;
    private $lockout = 13;

    public function home() : View
    {
      return view('airbases.home', [
        'title' => 'Tailwindcss Express',
      ]);
    }

    public function admin() : View
    {
      return view('admin.dashboard', [
        'title' => 'Admin Panel',
        'title_sidebar' => 'Tailwindcss',
        'breadcrumbs' => 'Dashboard',
      ]);
    }

    public function login(): View
    {
      return view('auth.login', [
        'title' => 'Login',
        'context' => 'Lorem ipsum dolor sit amet.'
      ]);
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
      try { 
        Log::info('Request Body : ', $request->all());
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string'
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['kode_lanud'] = null;

        $user = User::create($data);

        if ($request->expectsJson()) {
            response()->json([
                'message' => 'User registered successfully',
                'user' => $user
            ], 201);
        }

        Auth::login($user); 
        $request->session()->regenerate(); 
        return redirect()->route('home')->with('success', 'Registrasi berhasil dan Anda sudah login!');
      } catch (ValidationException $e) {
        return response()->json([
          'message' => 'Validation failed',
          'errors' => $e->errors()
        ], 422);
      }
    }

    public function authenticate(Request $request): RedirectResponse
    {
      $attempts = Session::get('login_attempts', 0);
      $last_attempt_time = Session::get('last_attempt_time', now()->timestamp);

      if ($attempts >= $this->max_attempts)
      {
        $remaining = $this->lockout - (now()->timestamp - $last_attempt_time);

        if ($remaining > 0)
        {
          return back()->with('error', "Terlalu banyak request login. Coba lagi dalam $remaining detik.");
        }

        Session::put('login_attempts', 0);
        Session::put('last_attempt_time', now()->timestamp);
      }

      $credentials = $request->validate([
        'username' => 'required|string|min:3|max:30|alpha_num',
        'password' => 'required'
      ]);

      if (Auth::attempt($credentials))
      {
        $request->session()->regenerate();
        Session::put('login_attempts', 0);

        $user = Auth::user();
        $user_data = [
            'username' => Auth::user()->username,
            'login_time' => now()->toDateTimeString()
        ];

        // Storage::disk('local')->put('login_result.json', json_encode($user_data, JSON_PRETTY_PRINT));

        if ($user->role === 'admin')
        {
          return redirect()->route('admin.dashboard');
        } 
        elseif ($user->role === 'user')
        {
          return redirect()->route('home');
        } 
        else
        {
          return redirect()->route('auth.login');
        }
      } else {
        Session::put('login_attempts', $attempts + 1);
        Session::put('last_attempt_time', now()->timestamp);
      }

      return back()->withErrors(['username' => 'Username tidak diketahui.'])
                    ->withInput()
                    ->with('error', 'Login gagal. Coba lagi.');
    }

    public function logout(Request $request): RedirectResponse
    {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect()->route('login')->with('success', 'Berhasil Logout.');
    }
}
