@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm space-y-8">
        <div class="text-center">
            <h2 class="mt-6 text-center text-2xl font-bold text-gray-900">Welcome Back</h2>
            <p class="mt-2 text-sm text-center text-gray-500">Sign in to your account below</p>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-sm">
                {{ $message }}
            </div>
        @endif

        <form class="mt-8 space-y-6" action="{{ route('authenticate') }}" method="POST">
            @csrf

            <div class="rounded-md -space-y-px">
                {{-- Email --}}
                <div>
                    <label for="email" class="sr-only">Email address</label>
                    <input 
                        id="email" 
                        name="email" 
                        type="email" 
                        autocomplete="email" 
                        required 
                        value="{{ old('email') }}"
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                        placeholder="Email address"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mt-4">
                    <label for="password" class="sr-only">Password</label>
                    <input 
                        id="password" 
                        name="password" 
                        type="password" 
                        autocomplete="current-password" 
                        required
                        class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                        placeholder="Password"
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
            </div>

            <div>
              <button type="submit"
                  class="pointer-cursor group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                  Sign in
              </button>
            </div>
        </form>

        {{-- Trial Text --}}
        <p class="mt-4 text-center text-sm text-gray-600">
          Not a member? 
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
        </p>
    </div>
</div>
@endsection
