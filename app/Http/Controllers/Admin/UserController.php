<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use GuzzleHttp\Middleware;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function users(): View
    {
        $users = User::paginate(10);
        $isPaginated = $users->total() > $users->perPage();

        return view('admin.users', [
            'title' => 'Admin Panel',
            'title_sidebar' => 'Tailwindcss',
            'breadcrumbs' => 'Users',
        ], compact('users', 'isPaginated'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.users.create', [
            'title' => 'Admin Panel',
            'title_sidebar' => 'Tailwindcss',
            'breadcrumbs' => 'Users',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_lanud' => 'nullable|string|max:255',
            'username'   => 'required|string|max:100|unique:users',
            'password'   => 'required|string|min:6',
            'role'       => 'required|in:admin,user',
        ]);

        User::create([
            'kode_lanud' => $request->kode_lanud,
            'username'   => $request->username,
            'password'   => Hash::make($request->password),
            'role'       => $request->role,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
